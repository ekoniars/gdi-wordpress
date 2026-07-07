# GDI Team Images

Replace these placeholder images with real team photos:

## Files to add to `wp-content/themes/gdi/images/`:

1. **alon.jpg** - אלון גולדברג (CTO)
   - Size: 96x96px or larger (will be cropped to circle)
   - Format: JPG or PNG
   - Location: `images/alon.jpg`

2. **einav.jpg** - עינב גולדברג (מנהלת תפעול)
   - Size: 96x96px or larger
   - Format: JPG or PNG
   - Location: `images/einav.jpg`

3. **eitan.jpg** - Eitan Koniarski (מנהל פיתוח עסקי ושיווק)
   - Size: 96x96px or larger
   - Format: JPG or PNG
   - Location: `images/eitan.jpg`

## Then update `index.php`:

Change the avatar divs from:
```html
<div class="avatar">א</div>
```

To:
```html
<img src="<?php echo get_template_directory_uri(); ?>/images/alon.jpg" alt="אלון" class="avatar">
```

## Direct replacement:

After uploading images, modify `index.php` line numbers:
- Line ~59: Alon avatar
- Line ~64: Einav avatar
- Line ~69: Eitan avatar
