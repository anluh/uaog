start:
	docker-compose up -d --build

stop:
	docker-compose stop

dev:
	docker-compose run --rm npm run dev

watch:
	docker-compose run --rm npm run watch

migrate:
	docker-compose run --rm artisan migrate

artisan:
	docker-compose run --rm artisan $(arg)

npm:
	docker-compose run --rm npm