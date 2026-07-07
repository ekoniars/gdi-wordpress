# GDI.com — WordPress Setup

Dark, dramatic one-page marketing site for Goldberg Development Instruction.

## Quick Start

### 1️⃣ Install Docker

- **Mac/Windows**: [Docker Desktop](https://www.docker.com/products/docker-desktop)
- **Linux**: `curl -fsSL https://get.docker.com | sh`

### 2️⃣ Start Development Server

```bash
cd /Users/ekoniars/projects/wordpress-ops/GDI.com
make install
```

This:
- Starts Docker containers (MySQL, WordPress, phpMyAdmin, Redis)
- Installs WordPress
- Activates the GDI theme

Visit: **http://localhost:8080**

Admin panel: **http://localhost:8080/wp-admin**
- User: `admin`
- Password: `gdi_secure_2024`

### 3️⃣ Useful Commands

```bash
# View logs
make logs

# Run WP-CLI commands
make wp-cli cmd='post list'

# Open phpMyAdmin
make phpmyadmin

# Open MySQL shell
make db-shell

# Stop containers
make down

# Full reset (delete all data)
make clean
```

---

## File Structure

```
GDI.com/
├── docker-compose.yml          # Docker configuration
├── Makefile                     # Development commands
├── wp-config.php                # WordPress configuration
├── wp-content/
│   ├── themes/
│   │   └── gdi/                 # Custom theme (RTL Hebrew)
│   │       ├── index.php        # Main template (edit here)
│   │       ├── style.css        # Styling
│   │       ├── functions.php    # Theme functions
│   │       └── theme.json       # Block theme config
│   └── plugins/                 # WordPress plugins
├── PRODUCTION.md                # Deployment guide
└── README.md                    # This file
```

---

## Editing Content

### From WordPress Admin

1. Visit http://localhost:8080/wp-admin
2. Go to Pages → Home
3. Edit and save

### From Code (Recommended)

All content is in `wp-content/themes/gdi/index.php`. Edit HTML directly:

- **Hero** (line ~25): Headline, CTA buttons
- **Stats** (line ~35): Numbers with counters
- **Team** (line ~45): Team member cards
- **Capabilities** (line ~70): Six capability cards with placeholder images
- **AI Section** (line ~105): AI methodology & badges
- **Footer** (line ~130)

### Adding Images

Replace placeholder divs:

```html
<!-- Before -->
<div class="ph">Placeholder — צילום מסך: מנוע חיפוש</div>

<!-- After -->
<img src="https://your-cdn.com/screenshot.png" alt="Search Engine">
```

---

## Theme Customization

### Colors

Edit `wp-content/themes/gdi/style.css` (top of file):

```css
:root {
  --bg: #07070a;              /* Dark background */
  --gold: #d4af37;            /* Primary accent */
  --text: #e8e6e0;            /* Light text */
  --muted: #9a97a0;           /* Dimmed text */
}
```

### Typography

Font: **Heebo** (Hebrew-optimized sans-serif)

Loaded from Google Fonts. To change:

```css
--font: "Your Font Name", system-ui, sans-serif;
```

Then add to `functions.php`:

```php
wp_enqueue_style('gdi-font', 'https://fonts.googleapis.com/css2?family=YourFont:wght@400;700;900');
```

### Animations

Scroll reveals, number counters, hover effects are all in `style.css` under:
- `@keyframes shimmer`
- `@keyframes bob`
- `.reveal` class
- `.card:hover`

To disable animations, set `prefers-reduced-motion`:

```css
@media (prefers-reduced-motion: reduce) {
  * { animation: none !important; }
}
```

---

## Plugins

Currently using:

- **None** — This theme is intentionally minimal. Add only what you need.

Recommended plugins:

| Plugin | Purpose | Install |
|--------|---------|---------|
| WP All-in-One Migration | Export/import site | `make wp-cli cmd='plugin install all-in-one-wp-migration'` |
| Akismet | Anti-spam | Built-in with WordPress |
| WP Super Cache | Caching | `make wp-cli cmd='plugin install wp-super-cache --activate'` |

---

## Deployment

See [PRODUCTION.md](PRODUCTION.md) for:
- Moving to production server
- Configuring your custom domain
- Setting up SSL
- Cloudflare Workers integration
- Backup strategy
- WP-CLI over SSH (edit from Claude)

**TL;DR:**

```bash
# 1. Export site from Docker
make wp-cli cmd='plugin install all-in-one-wp-migration --activate'
# Then export via http://localhost:8080/wp-admin

# 2. Deploy to VPS
# Upload via All-in-One WP Migration

# 3. Point domain to VPS
# Update DNS A record

# 4. Enable CloudFlare proxy
# Cloudflare Dashboard → DNS
```

---

## Editing from Claude / WP-CLI

Install Claude's WP-CLI plugin:

```bash
make wp-cli cmd='plugin install wp-cli-code-snippets --activate'
```

Then from Claude terminal:

```bash
docker-compose exec wordpress wp post create \
  --post_title='New Post' \
  --post_content='Content here' \
  --post_status='publish'
```

---

## Troubleshooting

### Containers won't start?

```bash
# Check logs
make logs

# Restart everything
make down
make up

# Full reset
make clean
make install
```

### WordPress not accessible at http://localhost:8080?

```bash
# Wait 10 seconds for WordPress to initialize
sleep 10

# Then visit http://localhost:8080
```

### Database connection error?

```bash
# Verify database is running
docker ps | grep gdi

# Check database logs
docker-compose logs db
```

### Forgot admin password?

```bash
make wp-cli cmd='user list'
make wp-cli cmd='user update admin --prompt=user_pass'
```

---

## Support

- **Docker issues**: https://docs.docker.com/
- **WordPress docs**: https://wordpress.org/support/
- **WP-CLI reference**: https://developer.wordpress.org/cli/commands/
- **Theme customization**: Edit `wp-content/themes/gdi/` files directly

---

**Last updated**: July 2026
**Theme**: GDI v1.0.0
**WordPress**: Latest
**License**: GPL-2.0-or-later
