install:
	@make build
	@make up
	docker compose exec php composer install
	docker compose exec php composer require smarty/smarty
up:
	docker compose up -d
down:
	docker compose down
build:
	docker compose build --no-cache
php:
	docker compose exec php sh
mysql:
	docker compose exec mysql mysql -u testuser -p testpassword
