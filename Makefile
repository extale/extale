ifeq ("$(wildcard .env)","")
    $(shell cp .env.example .env)
endif

include .env

dc := docker-compose
artisan := php artisan
dc_arg := exec -T app
dc_exec_app := $(dc) $(dc_arg)

docker_run_package :=
ifeq ($(OS),Windows_NT)
	docker_run_package = winpty
endif

.DEFAULT_GOAL := help

up: ## Run containers
	$(dc) up -d --remove-orphans

stop: ## Stop all docker containers
	$(dc) stop

down: ## Remove docker containers
	$(dc) down

restart: ## Restart docker containers
	$(dc) restart

exec-app: ## Bash to app container
	$(docker_run_package) docker exec -it $(APP_NAME)_app bash

composer-install: up ## Install php dependencies
	$(dc_exec_app) composer install

install: up composer-install ## Install a project
	echo -e "Make: The app prepared was successful. \n"





