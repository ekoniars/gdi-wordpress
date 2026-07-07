# העלאת תמונות הצוות

## שלב 1: שמור את התמונות

תמונות הצוות שהעלית:
1. אלון גולדברג (קנל) → שמור כ **alon.jpg**
2. עינב גולדברג (אישה עם שיער אדום) → שמור כ **einav.jpg**
3. Eitan Koniarski (גבר עם משקפיים) → שמור כ **eitan.jpg**

## שלב 2: העלה לתיקייה

העלה את התמונות ל:
```
/Users/ekoniars/projects/wordpress-ops/GDI.com/wp-content/themes/gdi/images/
```

## שלב 3: Verify

אם עשית הכל נכון, כל יום לרענן את http://localhost:8080 ותראה את התמונות!

## או דרך Terminal:

```bash
# Copy images
cp ~/Downloads/your-image.jpg /Users/ekoniars/projects/wordpress-ops/GDI.com/wp-content/themes/gdi/images/alon.jpg
cp ~/Downloads/your-image2.jpg /Users/ekoniars/projects/wordpress-ops/GDI.com/wp-content/themes/gdi/images/eitan.jpg
cp ~/Downloads/your-image3.jpg /Users/ekoniars/projects/wordpress-ops/GDI.com/wp-content/themes/gdi/images/einav.jpg

# Fix permissions
chmod 644 /Users/ekoniars/projects/wordpress-ops/GDI.com/wp-content/themes/gdi/images/*

# Refresh browser
open http://localhost:8080
```

## עדכון אוטומטי:

Theme כבר מכוונה להציג תמונות אם הן קיימות!
אם תמונה לא קיימת, יופיע האות הראשונה (כמו עכשיו).

