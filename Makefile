.PHONY: app
app:
	docker exec -it app bash

.PHONY: up
up:
	docker compose up -d

.PHONY: build
build:
	docker compose up -d --build

.PHONY: down
down:
	docker compose down
