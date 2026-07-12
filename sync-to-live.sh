#!/bin/bash
# מסנכרן את ערכת הנושא GDI לשרת החי (Awardspace).
#
# משתמש ב-sftp ולא ב-rsync: השרת מגדיר "sftp connections only" וחוסם
# הרצת פקודות מרחוק, ו-rsync מחייב תהליך בצד המרוחק.
#
# אם המפתח ~/.ssh/awardspace הותקן בשרת, לא תידרש סיסמה.
# אחרת הסיסמה תתבקש: http://localhost:3000/credentials

set -u

LOCAL="/Users/ekoniars/projects/wordpress-ops/GDI.com/wp-content/themes/gdi"
REMOTE_DIR="gdi.atwebpages.com/wp-content/themes/gdi"
HOST="4773550@185.176.43.102"
PORT=221
PASSWORD="~xyhYCoX16AgH4oQ"

echo "🔄 מסנכרן את ערכת GDI לשרת החי"
echo "   מקור: $LOCAL"
echo "   יעד:  $HOST:$REMOTE_DIR"
echo

if [ ! -d "$LOCAL" ]; then
    echo "❌ תיקיית המקור לא קיימת: $LOCAL"
    exit 1
fi

# put -r על תיקייה קיימת מעלה את התוכן פנימה. -p משמר זמני שינוי.
sshpass -p "$PASSWORD" sftp -P "$PORT" "$HOST" <<EOF
cd $REMOTE_DIR
put -rp $LOCAL/*
bye
EOF
status=$?

echo
if [ $status -ne 0 ]; then
    echo "❌ ההעלאה נכשלה (קוד $status). ייתכן שהאתר לא עודכן."
    sleep 3
    exit $status
fi

echo "✅ ההעלאה הושלמה. בודק את האתר..."

home=$(curl -s -o /dev/null -w "%{http_code}" https://gdi.dpdns.org/)
css=$(curl -s -o /dev/null -w "%{http_code}" https://gdi.dpdns.org/wp-content/themes/gdi/style.css)

echo "   דף הבית:  $home"
echo "   style.css: $css"
echo

if [ "$home" = "200" ] && [ "$css" = "200" ]; then
    echo "✅ האתר חי: https://gdi.dpdns.org"
else
    echo "⚠️  משהו לא תקין — כדאי לבדוק בדפדפן."
fi

echo
echo "לחץ Enter לסגירה."
read -r
