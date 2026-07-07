# GDI.com Production Setup

## Local Development → Production Deployment

### Step 1: Export from Local Docker

```bash
cd /Users/ekoniars/projects/wordpress-ops/GDI.com

# Option A: Export database dump
docker-compose exec db mysqldump -u gdi_user -p gdi_wordpress > backups/gdi_production.sql

# Option B: Use WP All-in-One Migration (easier)
make wp-cli cmd='plugin install all-in-one-wp-migration --activate'
# Then go to http://localhost:8080/wp-admin → All-in-One WP Migration → Export
```

### Step 2: Upload to Your Domain (Cloudflare Workers / Headless Approach)

Since you chose **Cloudflare Workers**, you have two paths:

#### Path A: Traditional WordPress (on VPS)
```bash
# 1. VPS Setup (DigitalOcean / Linode)
ssh root@your-vps-ip

# 2. Install Docker on VPS
curl -fsSL https://get.docker.com -o get-docker.sh && sh get-docker.sh

# 3. Clone your repo & deploy
git clone https://github.com/yourusername/gdi-wordpress.git
cd gdi-wordpress
docker-compose up -d

# 4. Update DNS to point to VPS IP
# Then enable CloudFlare proxy (DNS only or full CDN)
```

#### Path B: Headless API (Recommended for Cloudflare)
```bash
# Keep WordPress on a VPS/server for content management
# Expose only REST API (not the admin UI)

# Add to wp-config.php on production:
define( 'WP_ENVIRONMENT_TYPE', 'production' );
define( 'DISALLOW_FILE_MODS', true );

# Use Cloudflare Workers to:
# 1. Fetch content from WP REST API (/wp-json/)
# 2. Cache on Cloudflare's edge network
# 3. Serve static HTML to visitors
```

### Step 3: Cloudflare Configuration

**If using Headless API:**

1. Create a Cloudflare Worker:
```javascript
// https://github.com/cloudflare/workers-sdk

export default {
  async fetch(request) {
    // Proxy WordPress REST API through Cloudflare
    const url = new URL(request.url);
    
    if (url.pathname.startsWith('/wp-json/')) {
      const wpUrl = 'https://your-wp-server.com' + url.pathname;
      return fetch(wpUrl);
    }
    
    // Serve static frontend
    return fetch('https://your-cdn-bucket.s3.amazonaws.com' + url.pathname);
  }
};
```

2. Add Cloudflare Page Rules:
   - Cache Level: Cache Everything
   - Browser Cache TTL: 1 hour
   - Edge Cache TTL: 1 month

### Step 4: Deploy with WP All-in-One Migration

**Easiest option for WordPress + custom domain:**

```bash
# Local (Docker)
make wp-cli cmd='plugin install all-in-one-wp-migration --activate'

# Export: http://localhost:8080/wp-admin → All-in-One WP Migration → Export
# (Creates .wpress file with everything: DB + files + settings)

# On VPS:
# 1. Install WordPress
# 2. Install All-in-One WP Migration plugin
# 3. Upload the .wpress file
# 4. Click "Import"
# 5. Update domain in WordPress Settings → General
```

### Step 5: SSL Certificate (Let's Encrypt)

```bash
# On VPS (if using Certbot)
sudo apt-get install certbot python3-certbot-nginx
sudo certbot certonly --standalone -d yourdomain.com
sudo certbot renew --dry-run  # Test auto-renewal
```

Or use **Cloudflare's free SSL** (proxy DNS through CF):
- Cloudflare Dashboard → SSL/TLS → Full (encrypted)

### Step 6: Environment Variables for Production

Create `.env.production` on your server:

```bash
WORDPRESS_DB_HOST=db:3306
WORDPRESS_DB_NAME=gdi_wordpress
WORDPRESS_DB_USER=gdi_user
WORDPRESS_DB_PASSWORD=[STRONG_PASSWORD_HERE]
WORDPRESS_DEBUG=false
WORDPRESS_DEBUG_LOG=false
WP_SITEURL=https://yourdomain.com
WP_HOME=https://yourdomain.com
WP_MEMORY_LIMIT=256M
```

### Step 7: Editing Content from Claude (WP-CLI over SSH)

```bash
# From Claude, you can now run WP-CLI commands on your VPS:

# Install WP-CLI on VPS (if not already installed via Docker)
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
sudo mv wp-cli.phar /usr/local/bin/wp

# Then from terminal/Claude:
ssh -i ~/.ssh/vps_key ubuntu@your-vps-ip "wp post create --post_title='My Post' --post_content='Content here'"
```

### Step 8: Backup Strategy

```bash
# Daily backups to S3 / Backblaze
docker-compose exec db mysqldump -u gdi_user -p gdi_wordpress | \
  aws s3 cp - s3://your-backup-bucket/gdi-$(date +%Y%m%d).sql

# Or use WP Backup plugins (BackWPup, UpdraftPlus)
```

---

## Deployment Checklist

- [ ] VPS provisioned (DigitalOcean / Linode)
- [ ] Docker installed on VPS
- [ ] docker-compose.yml copied to VPS
- [ ] `.env.production` configured with strong passwords
- [ ] Database exported and imported
- [ ] WP All-in-One Migration plugin activated
- [ ] Domain DNS updated (A record → VPS IP)
- [ ] Cloudflare proxy enabled (optional)
- [ ] SSL certificate installed (Let's Encrypt or Cloudflare)
- [ ] wp-cli accessible via SSH
- [ ] Backups automated
- [ ] Monitoring setup (uptime checks, error logs)

---

## Quick Start Commands (Production)

```bash
# SSH into VPS
ssh root@your-vps-ip

# Start containers
docker-compose up -d

# View logs
docker-compose logs -f wordpress

# Run WP-CLI
docker-compose exec wordpress wp option get home

# Stop containers (for maintenance)
docker-compose down

# Backup database
docker-compose exec db mysqldump -u gdi_user -p gdi_wordpress > backup.sql
```

---

## Cost Estimate

| Service | Cost | Notes |
|---------|------|-------|
| VPS (DigitalOcean $6/mo) | $6/mo | 1GB RAM, sufficient for GDI |
| Cloudflare CDN | Free | Cache + proxy (optional) |
| Domain | $10/yr | Your domain registrar |
| Backups (S3) | ~$1/mo | 30 daily backups |
| **Total** | **~$8/mo** | Very affordable |

---

## Need Help?

From Claude, you can now:
- Edit posts/pages: `wp post create --post_title='...' --post_content='...'`
- Update theme: Edit `wp-content/themes/gdi/index.php` → `git push` → `git pull` on VPS
- Manage settings: `wp option update siteurl https://yourdomain.com`
- View logs: `docker-compose logs wordpress`
