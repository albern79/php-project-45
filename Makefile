# Makefile

install: # установить зависимости
	composer install

brain-games: # запустить программу
	./bin/brain-games

validate: # проверить файл
	composer validate

lint: # запустить phpcs
	composer exec --verbose phpcs -- --standard=PSR12 src bin

brain-even: #запустить программа проверка на четность
	./bin/brain-even

brain-calc: # запустить программу калькулятор
	./bin/brain-calc

brain-gcd: #запустить программу нод
	./bin/brain-gcd

brain-progression: #запустить программу аривметическая прогрессия
	./bin/brain-progression