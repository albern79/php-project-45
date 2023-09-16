### Hexlet tests and linter status:
[![Actions Status](https://github.com/albern79/php-project-45/workflows/hexlet-check/badge.svg)](https://github.com/albern79/php-project-45/actions)

<a href="https://codeclimate.com/github/albern79/php-project-45/maintainability"><img src="https://api.codeclimate.com/v1/badges/0d5503cefe5420433e11/maintainability" /></a>

«Игры разума» — набор из пяти консольных игр, построенных по принципу популярных мобильных приложений для прокачки мозга. Каждая игра задает вопросы, на которые нужно дать правильные ответы. После трех правильных ответов считается, что игра пройдена. Неправильные ответы завершают игру и предлагают пройти ее заново. Игры:

    Калькулятор. Арифметические выражения, которые необходимо вычислить.
    Прогрессия. Поиск пропущенных чисел в последовательности чисел.
    Определение четного числа.
    Определение наибольшего общего делителя.
    Определение простого числа.


Установка игры: composer global require brgames/games:dev-master.

After that execute one of the following command in console:
После установки выбрать одну из игр набрав в консоле: 

make brain-even - запускает игру "Определение четного числа"
Демонстрация: https://asciinema.org/a/Li8vYhEWKbM99vDtjhNiDNKLA

make brain-calc - запускает игру "Калькулятор"
Демонстрация: https://asciinema.org/a/ShBkG5mNSpJ8IYdmQMi15DxbZ

make brain-progression - запускает игру "Прогрессия"
Демонстрация: https://asciinema.org/a/uPAWYnITleEfHa12Oh2YiVDOm

make brain-gcd - запускает игру "Определение наибольшего общего делителя"
Демонстрация: https://asciinema.org/a/f2I6eCi9ohON9bzuJx7JjGRcr

make brain-prime - запускает игру "Определение простого числа"
Демонстрация: https://asciinema.org/a/aXhZvh63mPjN0bStqXBy1bd4p

Удаление игры: composer global remove brgames/games.












