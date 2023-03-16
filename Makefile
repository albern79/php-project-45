# Makefile

install: # установить зависимости
	composer install

brain-games: # запустить программу
	./bin/brain-games

validate: # проверить файл
	composer validate

