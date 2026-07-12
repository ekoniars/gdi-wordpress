#!/bin/bash

cd "$(dirname "$0")"

echo "🔍 בדוק אם Docker עובד..."

# בדוק אם Docker daemon רץ
if ! docker info > /dev/null 2>&1; then
    echo "❌ Docker לא עובד. מפעיל Docker Desktop..."
    open -a Docker
    echo "⏳ חכה 15 שניות ל-Docker להפעיל..."
    sleep 15
fi

# בדוק שוב אחרי 15 שניות
if ! docker info > /dev/null 2>&1; then
    echo "❌ Docker עדיין לא מגיב. בדוק שה-Docker Desktop פתוח ובריא."
    exit 1
fi

echo "✅ Docker עובד!"

# בדוק אם containers כבר רצים
if docker-compose ps 2>/dev/null | grep -q "wordpress"; then
    echo "✅ WordPress כבר רץ"
else
    echo "🚀 מפעיל Docker Compose..."
    docker-compose up -d
    sleep 5
fi

# בדוק אם localhost:8080 רד"פ
if curl -s http://localhost:8080/ > /dev/null; then
    echo "✅ WordPress מוכן!"
    echo "📱 פתח: http://localhost:8080/"
    open http://localhost:8080/
else
    echo "⏳ WordPress עדיין טוען... חכה 10 שניות"
    sleep 10
    open http://localhost:8080/
fi
