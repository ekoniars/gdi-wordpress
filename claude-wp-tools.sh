#!/bin/bash
# Claude Integration: WP-CLI Command Wrapper
# Usage from Claude or terminal:
#   ./claude-wp-tools.sh post create --post_title='My Title' --post_content='Content'
#   ./claude-wp-tools.sh option get home
#   ./claude-wp-tools.sh user list

set -e

cd "$(dirname "$0")"

# Check if containers are running
if ! docker-compose ps wordpress | grep -q "Up"; then
    echo "❌ WordPress container not running. Start with: make up"
    exit 1
fi

# Run WP-CLI command
echo "Running: wp $@"
docker-compose exec wordpress wp "$@"
