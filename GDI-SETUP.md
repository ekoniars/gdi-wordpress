# GDI.com WordPress Setup

## Quick Start

1. **Database**: Create a MySQL database named `gdi_local` (or update wp-config.php)
2. **WordPress**: Run WP installation at `http://localhost/GDI.com/`
3. **Theme**: Activate "GDI - Goldberg Development Instruction" from Appearance > Themes

## Theme Structure

- `wp-content/themes/gdi/index.php` — Main template (edit HTML/content here)
- `wp-content/themes/gdi/style.css` — Styling (dark theme with gold accents)
- `wp-content/themes/gdi/functions.php` — Theme setup (Heebo font, enqueueing)
- `wp-content/themes/gdi/theme.json` — WordPress block theme config (color palette)

## Content Editing

The theme is a **single-page marketing site**. All content is in `index.php`:

- **Hero section**: Line ~25 — Main headline & CTA
- **Stats**: Line ~35 — 4 stat counters (13 years, 50x speed, 200% productivity, 0 downtime)
- **Team**: Line ~45 — Three team cards (Alon, Eitan, Einav)
- **Capabilities**: Line ~70 — Six capability cards (Placeholder images + descriptions)
- **AI section**: Line ~105 — AI methodology + badges
- **CTA**: Line ~120 — Final call-to-action
- **Footer**: Line ~130

## To Add Images

Replace placeholder divs in `index.php`:

```html
<!-- Old -->
<div class="ph">Placeholder — צילום מסך: מנוע חיפוש</div>

<!-- New -->
<img src="/path/to/image.png" alt="Search Engine Screenshot">
```

The `.ph` class has `aspect-ratio: 16 / 9` and placeholder styling. Remove the class when using real images.

## Styling

All CSS is in `style.css`. Color scheme uses CSS custom properties:

- `--bg`: Dark background (#07070a)
- `--gold`: Primary accent (#d4af37)
- `--text`: Light text (#e8e6e0)
- `--muted`: Dimmed text (#9a97a0)

Modify these in `:root` to change the theme's palette.

## Features

- ✓ Dark theme optimized for business audience
- ✓ RTL Hebrew full support
- ✓ Scroll-triggered reveals
- ✓ Animated number counters
- ✓ Responsive grid layouts
- ✓ Hover effects on cards
- ✓ Gold gradient shimmer on hero title
- ✓ Respects `prefers-reduced-motion`
- ✓ Fixed header with nav links

## Deploy

1. Copy `/GDI.com` to your server
2. Update `wp-config.php` with production database credentials
3. Update siteurl & home in WordPress Settings
4. Ensure Heebo font CDN is accessible (or bundle it locally)

No additional plugins required.
