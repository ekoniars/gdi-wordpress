#!/bin/bash

# GDI WordPress Launcher
# Usage: ./launch.sh

set -e

echo "🚀 GDI WordPress Development Setup"
echo "===================================="

cd "$(dirname "$0")"

# Check Docker
if ! command -v docker &> /dev/null; then
    echo "❌ Docker not found. Install from https://www.docker.com/products/docker-desktop"
    exit 1
fi

echo "✓ Docker detected"

# Check docker-compose
if ! command -v docker-compose &> /dev/null; then
    echo "❌ docker-compose not found. Install Docker Desktop (includes docker-compose)"
    exit 1
fi

echo "✓ docker-compose detected"

# Start containers
echo ""
echo "📦 Starting containers..."
docker-compose up -d

# Wait for WordPress
echo "⏳ Waiting for WordPress to initialize (30 seconds)..."
sleep 30

# Check if WordPress is ready
max_attempts=60
attempt=0
until docker-compose exec -T wordpress wp core is-installed &>/dev/null; do
    attempt=$((attempt + 1))
    if [ $attempt -eq $max_attempts ]; then
        echo "❌ WordPress failed to initialize"
        echo "Run 'make logs' to see what went wrong"
        exit 1
    fi
    echo "⏳ Attempt $attempt/$max_attempts..."
    sleep 2
done

echo ""
echo "✅ GDI WordPress is running!"
echo ""
echo "🌐 Visit these URLs:"
echo "   WordPress:  http://localhost:8080"
echo "   Admin:      http://localhost:8080/wp-admin"
echo "   phpMyAdmin: http://localhost:8081"
echo ""
echo "👤 Admin credentials:"
echo "   User:     admin"
echo "   Password: gdi_secure_2024"
echo ""
echo "💡 Next steps:"
echo "   1. Open http://localhost:8080 to see your site"
echo "   2. Edit content in wp-content/themes/gdi/index.php"
echo "   3. Run 'make help' for more commands"
echo ""
echo "🛑 To stop: make down"
echo "🔄 To reset: make clean && make install"
