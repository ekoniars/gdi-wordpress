# GDI.com Launch Checklist

## ✅ Local Development Setup

- [ ] Docker installed (Mac/Windows/Linux)
- [ ] Clone/copy GDI.com to machine
- [ ] Run `make install` (or `./launch.sh`)
- [ ] Visit http://localhost:8080
- [ ] Admin panel working at http://localhost:8080/wp-admin
- [ ] Content editable in wp-content/themes/gdi/index.php
- [ ] Images replaced with real screenshots (optional but recommended)

## 🎨 Content & Design

- [ ] Hero headline copy finalized
- [ ] Team cards (Alon, Eitan, Einav) copy reviewed
- [ ] 6 capability cards copy final
- [ ] AI section badges updated
- [ ] Footer contact info correct (alon77@gmail.com)
- [ ] Placeholder images replaced with real screenshots
- [ ] Logo/branding approved
- [ ] Colors (gold #d4af37) approved

## 🔧 Technical Configuration

- [ ] wp-config.php credentials set
- [ ] Database name/user/pass configured
- [ ] SSL certificate ready (for production)
- [ ] Cloudflare account ready (if using CDN)
- [ ] Domain registered and pointing to registrar

## 📦 VPS / Hosting Setup

- [ ] VPS provisioned (DigitalOcean / Linode / AWS)
- [ ] SSH key pair generated
- [ ] Docker installed on VPS
- [ ] docker-compose.yml copied to VPS
- [ ] .env.production configured with strong passwords
- [ ] Firewall allows port 80, 443 (and 8080/8081 for dev only)
- [ ] Backups automated (S3 / Backblaze)

## 🌐 Domain & DNS

- [ ] Domain registered (your domain.com)
- [ ] DNS A record points to VPS IP (or Cloudflare nameservers)
- [ ] Cloudflare DNS configured (optional but recommended)
- [ ] SSL certificate installed (Let's Encrypt or Cloudflare)
- [ ] HTTPS enforced (redirect HTTP → HTTPS)

## 🚀 Deployment

- [ ] Site exported from local Docker (`make wp-cli cmd='...export'`)
- [ ] Database exported (SQL dump)
- [ ] WordPress uploaded to VPS
- [ ] Database imported on production
- [ ] WP-CLI accessible via SSH from Claude
- [ ] Site accessible at https://yourdomain.com
- [ ] Admin panel working at https://yourdomain.com/wp-admin
- [ ] Theme activated on production
- [ ] Contact email forwarding set up

## 🔐 Security

- [ ] WordPress admin users created (strong passwords)
- [ ] .env.production passwords changed (not shared)
- [ ] SSH keys secured (~/.ssh/gdi_production)
- [ ] Database backups encrypted
- [ ] Cloudflare firewall rules enabled (DDoS protection)
- [ ] WordPress debug mode disabled on production
- [ ] File permissions correct (755 dirs, 644 files)

## 📊 Monitoring & Maintenance

- [ ] Uptime monitoring enabled (Pingdom / UptimeRobot)
- [ ] Error logging configured
- [ ] Daily backups running (automated)
- [ ] Backup restoration tested
- [ ] WordPress auto-updates enabled (or manual schedule)
- [ ] WP-CLI commands tested via SSH

## 💬 Communication

- [ ] Team notified of launch date
- [ ] Email forwarding working (alon77@gmail.com)
- [ ] CTA buttons point to correct email/landing pages
- [ ] LinkedIn links updated (linkedin.com/in/alon7)

## 🎉 Launch Day

- [ ] Final content review
- [ ] Final screenshot testing (desktop + mobile)
- [ ] Performance check (Lighthouse / PageSpeed)
- [ ] Accessibility check (a11y)
- [ ] Submit to Google Search Console
- [ ] Submit to Bing Webmaster Tools
- [ ] Social media announcement ready
- [ ] Go live 🚀

---

## Quick Command Reference

```bash
# Local development
make install              # First-time setup
make up                   # Start containers
make down                 # Stop containers
make logs                 # View logs
make wp-cli cmd='...'     # Run WP-CLI
make clean                # Reset everything

# Editing content
./claude-wp-tools.sh post list
./claude-wp-tools.sh post create --post_title='...'

# Deployment
./launch.sh               # Quick start (local)
# See PRODUCTION.md for server deployment

# Git (if using version control)
git add .
git commit -m "Update content"
git push
```

---

## Post-Launch Maintenance

Every week:
- [ ] Check error logs
- [ ] Verify backups completed
- [ ] Monitor uptime status

Every month:
- [ ] Review analytics (if connected)
- [ ] Security scan (Wordfence / Sucuri)
- [ ] Update WordPress core (if available)
- [ ] Update plugins (if any)

Every quarter:
- [ ] Full backup test (restore to test environment)
- [ ] Performance review
- [ ] SEO audit
- [ ] Broken link check

---

**Last updated**: July 2026
**Total estimated setup time**: 2-4 hours (local dev) + 1-2 hours (production)
