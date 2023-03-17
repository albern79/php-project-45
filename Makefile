# Makefile

install: # установить зависимости
	composer install

brain-games: # запустить программу
	./bin/brain-games

validate: # проверить файл
	composer validate

lint: # запустить phpcs
	composer exec --verbose phpcs -- --standard=PSR12 src bin
