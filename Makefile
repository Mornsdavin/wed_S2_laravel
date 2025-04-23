up:
	docker-compose -f docker/docker-compose.yml up -d
down:
	docker-compose -f docker/docker-compose.yml down
composer:
	docker run --rm --interactive --tty --volume $(CURDIR):/app $(MAKECMDGOALS)
php: # docker exec container_name binary_file
	docker exec php $(MAKECMDGOALS)
npm:
	p$(MAKECMDGOALS)
clean:
	make down
	rm -rf docker/tmp node_modules vendor pnpm-lock.yaml composer.lock
	docker rmi docker-php-fpm
setup:
	make up
	pnpm install
	docker run --rm --interactive --tty --volume $(CURDIR):/app composer install
	docker exec php php artisan key:generate
	