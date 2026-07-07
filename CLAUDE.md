# GDI WordPress — Claude Integration Guide

How to edit this WordPress site from Claude.

## Quick Commands

### Content Editing

```bash
# Create a post
./claude-wp-tools.sh post create --post_title='My Title' --post_content='Content here' --post_status='publish'

# List all posts
./claude-wp-tools.sh post list

# Edit a post
./claude-wp-tools.sh post update 1 --post_content='Updated content'

# Delete a post
./claude-wp-tools.sh post delete 1 --force
```

### Theme & Settings

```bash
# Update site title
./claude-wp-tools.sh option update blogname 'G.D.I - Goldberg Development Instruction'

# Update site URL (important for migration!)
./claude-wp-tools.sh option update siteurl 'https://yourdomain.com'

# Activate a theme
./claude-wp-tools.sh theme activate gdi

# List installed themes
./claude-wp-tools.sh theme list
```

### User Management

```bash
# List users
./claude-wp-tools.sh user list

# Create user
./claude-wp-tools.sh user create newadmin user@example.com --role=administrator --user_pass='password123'

# Update user password
./claude-wp-tools.sh user update admin --prompt=user_pass
```

### Plugin Management

```bash
# Install plugin
./claude-wp-tools.sh plugin install wp-super-cache --activate

# List plugins
./claude-wp-tools.sh plugin list

# Deactivate plugin
./claude-wp-tools.sh plugin deactivate wp-super-cache

# Delete plugin
./claude-wp-tools.sh plugin delete wp-super-cache
```

### Database

```bash
# Run a custom SQL query
./claude-wp-tools.sh db query "SELECT * FROM wp_posts WHERE post_type='post';"

# Export database
docker-compose exec db mysqldump -u gdi_user -p gdi_wordpress > backup.sql

# Import database
cat backup.sql | docker-compose exec -T db mysql -u gdi_user -p gdi_wordpress
```

### Debugging

```bash
# Check WordPress status
./claude-wp-tools.sh core version

# View error logs
docker-compose exec wordpress cat /var/www/html/wp-content/debug.log

# Check database connection
./claude-wp-tools.sh db check
```

---

## Editing Theme Content Directly

The GDI theme is a single-page template. To edit content **programmatically**:

### Option 1: Edit the theme file directly (Fast)

```bash
# From Claude, you can:
# 1. Read the file
# 2. Make changes
# 3. Commit to git

# Example: Change hero headline
cd /Users/ekoniars/projects/wordpress-ops/GDI.com
# Edit wp-content/themes/gdi/index.php
# Line 25: Update <h1> content
```

### Option 2: Create WordPress pages with template tags

If you want content in WordPress admin instead of hardcoded HTML:

```bash
# Create a page
./claude-wp-tools.sh post create --post_type='page' --post_title='Team' --post_content='[team_shortcode]'

# Add custom fields
./claude-wp-tools.sh post meta add 123 team_member_name 'Alon Goldberg'
```

---

## Deployment from Claude

### Export & Deploy to Production

```bash
# 1. Export site (creates .wpress file)
./claude-wp-tools.sh plugin install all-in-one-wp-migration --activate

# 2. Trigger export via WP admin (automated via CLI)
./claude-wp-tools.sh snapshot export

# 3. Upload to production server
scp -i ~/.ssh/vps_key gdi-site.wpress user@prod-server:/tmp/

# 4. On production server:
ssh -i ~/.ssh/vps_key user@prod-server
docker-compose exec wordpress wp plugin install all-in-one-wp-migration --activate
docker-compose exec wordpress wp import /tmp/gdi-site.wpress
```

Or use the traditional method:

```bash
# Database export
docker-compose exec db mysqldump -u gdi_user -p gdi_wordpress > gdi-prod.sql

# SCP to server
scp gdi-prod.sql user@prod-server:/tmp/

# Import on production
ssh user@prod-server "docker-compose exec -T db mysql -u gdi_user -p gdi_wordpress < /tmp/gdi-prod.sql"
```

---

## Git Workflow (Recommended)

```bash
# Initialize git (if not already done)
cd /Users/ekoniars/projects/wordpress-ops/GDI.com
git init
git add .
git commit -m "Initial commit: GDI theme + Docker setup"

# Create GitHub repo, then:
git remote add origin https://github.com/yourusername/gdi-wordpress.git
git branch -M main
git push -u origin main

# Make changes, then push:
git add wp-content/themes/gdi/index.php
git commit -m "Update team section copy"
git push

# On production server, pull changes:
ssh user@prod-server "cd /var/www/gdi && git pull origin main"
```

---

## WP-CLI Reference

**All commands support this pattern:**

```
./claude-wp-tools.sh [command] [subcommand] [options]
```

Common commands:

| Command | Example |
|---------|---------|
| `post` | `post list`, `post create`, `post update`, `post delete` |
| `page` | `page list`, `page create` |
| `user` | `user list`, `user create`, `user update` |
| `plugin` | `plugin list`, `plugin install`, `plugin activate` |
| `theme` | `theme list`, `theme activate` |
| `option` | `option get siteurl`, `option update blogname 'New Name'` |
| `db` | `db check`, `db query`, `db export`, `db import` |
| `search-replace` | `search-replace old.com new.com --dry-run` |

Full docs: https://developer.wordpress.org/cli/commands/

---

## Permissions & Security

### For Local Development (Docker)

- Database: `gdi_user` / `gdi_user_password` (see docker-compose.yml)
- WordPress admin: `admin` / `gdi_secure_2024`
- Root: `root` / `gdi_root_secure_password_2024`

**⚠️ Change these for production!**

### For Production (SSH)

```bash
# Generate SSH key
ssh-keygen -t ed25519 -f ~/.ssh/gdi_production -N ""

# Copy public key to VPS
ssh-copy-id -i ~/.ssh/gdi_production.pub user@prod-server

# Use in Claude commands
ssh -i ~/.ssh/gdi_production user@prod-server "cd /path/to/gdi && ./claude-wp-tools.sh core version"
```

---

## Troubleshooting

### "WordPress container not running"

```bash
cd /Users/ekoniars/projects/wordpress-ops/GDI.com
make up
```

### "Cannot execute WP-CLI command"

```bash
# Check Docker is running
docker ps

# Check containers
docker-compose ps

# View logs
docker-compose logs wordpress
```

### "Database connection error"

```bash
# Verify database credentials match docker-compose.yml
./claude-wp-tools.sh db check

# If error persists, reset:
make clean
make install
```

---

## Integration with Claude Code

When using Claude Code with this project:

1. **Read theme files:**
   ```bash
   Read /Users/ekoniars/projects/wordpress-ops/GDI.com/wp-content/themes/gdi/index.php
   ```

2. **Edit and commit:**
   ```bash
   # Edit with Claude → auto-stages in git
   # Then:
   git commit -m "Update hero copy"
   git push
   ```

3. **Deploy changes:**
   ```bash
   # On production server
   ssh user@prod-server "cd /path/to/gdi && git pull && docker-compose restart wordpress"
   ```

4. **Run WP commands from Claude:**
   ```bash
   ./claude-wp-tools.sh post create --post_title='News' --post_content='Latest updates...'
   ```

---

**Last updated**: July 2026
**WordPress**: Latest
**WP-CLI**: Latest
