.PHONY: help up down logs db-shell wp-cli clean reset seed

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
	docker-compose exec db mysql -u gdi_user -p gdi_wordpress

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
