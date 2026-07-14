.PHONY: help up down logs db-shell wp-cli clean reset seed backup backups restore commit deploy rollback

help:
	@echo "GDI WordPress Development Commands"
	@echo "===================================="
	@echo "make up              - Start containers (Docker)"
	@echo "make down            - Stop containers"
	@echo "make logs            - View container logs"
	@echo "make db-shell        - Open MySQL shell"
	@echo "make wp-cli          - Run WP-CLI command (usage: make wp-cli cmd='post list')"
	@echo "make phpmyadmin      - Open phpMyAdmin (http://localhost:8081)"
	@echo "make clean           - Remove containers & volumes"
	@echo "make reset           - Full reset (containers + data)"
	@echo "make install         - First-time setup (up + install WP)"
	@echo ""
	@echo "Backup / Deploy / Rollback"
	@echo "===================================="
	@echo "make backup          - Snapshot DB + theme into backups/<timestamp>/"
	@echo "make backups         - List available snapshots"
	@echo "make restore         - Restore latest snapshot (or: make restore B=<name>)"
	@echo "make commit m='msg'  - git add + commit + push to GitHub"
	@echo "make deploy          - Backup first, then sync theme to live site"
	@echo "make rollback        - Restore latest snapshot AND sync it to live"
	@echo ""

BACKUP_DIR := backups
STAMP := $(shell date +%Y-%m-%d_%H%M%S)
DB := docker-compose exec -T db

# A snapshot is only useful if the DB dump actually has content. Dump to a temp
# dir first and only publish it once verified - a half-written snapshot that
# looks valid is worse than no snapshot, since restore would wipe the live DB.
backup:
	@docker info >/dev/null 2>&1 || { echo "❌ Docker isn't running. Start it (make up) and retry."; exit 1; }
	@TMP=$(BACKUP_DIR)/.tmp-$(STAMP); \
	mkdir -p $$TMP; \
	trap 'rm -rf $$TMP' EXIT; \
	$(DB) mysqldump -u wordpress -pwordpress_password wordpress > $$TMP/db.sql || \
	  { echo "❌ mysqldump failed - is the db container up? (make up)"; exit 1; }; \
	grep -q "CREATE TABLE" $$TMP/db.sql || \
	  { echo "❌ Dump has no tables - refusing to save an empty backup."; exit 1; }; \
	tar -czf $$TMP/theme.tar.gz -C wp-content/themes gdi || { echo "❌ Theme archive failed"; exit 1; }; \
	mv $$TMP $(BACKUP_DIR)/$(STAMP); \
	echo "✓ Backup created: $(BACKUP_DIR)/$(STAMP)"; \
	ls -lh $(BACKUP_DIR)/$(STAMP)

backups:
	@echo "Available snapshots (newest last):"
	@ls -1 $(BACKUP_DIR) 2>/dev/null || echo "  (no backups yet - run: make backup)"

# B picks a snapshot by name; empty = latest
B ?=
restore:
	@docker info >/dev/null 2>&1 || { echo "❌ Docker isn't running. Start it (make up) and retry."; exit 1; }
	@BK="$(B)"; \
	[ -n "$$BK" ] || BK=$$(ls -1 $(BACKUP_DIR) 2>/dev/null | grep -v '^\.' | tail -1); \
	[ -n "$$BK" ] || { echo "❌ No backups found. Run: make backup"; exit 1; }; \
	[ -f "$(BACKUP_DIR)/$$BK/db.sql" ] || { echo "❌ Snapshot $$BK is missing db.sql"; exit 1; }; \
	grep -q "CREATE TABLE" $(BACKUP_DIR)/$$BK/db.sql || \
	  { echo "❌ Snapshot $$BK has an empty/corrupt dump - refusing to restore (it would wipe the DB)."; exit 1; }; \
	echo "♻️  Restoring snapshot: $$BK"; \
	$(DB) mysql -u wordpress -pwordpress_password wordpress < $(BACKUP_DIR)/$$BK/db.sql || \
	  { echo "❌ Restore failed"; exit 1; }; \
	tar -xzf $(BACKUP_DIR)/$$BK/theme.tar.gz -C wp-content/themes; \
	echo "✓ Restored DB + theme from $$BK"

commit:
	@[ -n "$(m)" ] || { echo '❌ Usage: make commit m="what changed"'; exit 1; }
	git add -A
	git commit -m "$(m)"
	git push
	@echo "✓ Committed and pushed to GitHub"

deploy: backup
	./sync-to-live.sh

rollback: restore
	./sync-to-live.sh

up:
	docker-compose up -d
	@echo "✓ Containers started"
	@echo "  WordPress: http://localhost:8080"
	@echo "  phpMyAdmin: http://localhost:8081"

down:
	docker-compose down
	@echo "✓ Containers stopped"

logs:
	docker-compose logs -f

db-shell:
	docker-compose exec db mysql -u wordpress -pwordpress_password wordpress

wp-cli:
	docker-compose exec wordpress wp $(cmd)

phpmyadmin:
	@echo "Opening phpMyAdmin at http://localhost:8081"
	@open http://localhost:8081 || echo "Visit: http://localhost:8081"

clean:
	docker-compose down
	docker volume rm gdi.com_db_data gdi.com_wp_data 2>/dev/null || true

reset: clean up
	@echo "✓ Full reset complete"

install: up
	@echo "Waiting for WordPress to be ready..."
	@sleep 10
	docker-compose exec wordpress wp core install \
		--url=http://localhost:8080 \
		--title="G.D.I - Goldberg Development Instruction" \
		--admin_user=admin \
		--admin_password=gdi_secure_2024 \
		--admin_email=alon77@gmail.com
	docker-compose exec wordpress wp theme activate gdi
	@echo "✓ WordPress installed & GDI theme activated"
	@echo "  Admin: http://localhost:8080/wp-admin"
	@echo "  User: admin / gdi_secure_2024"
