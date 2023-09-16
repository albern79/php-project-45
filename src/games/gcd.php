<?php

namespace Php\Project\Games\Gcd;

use function Php\Project\Engine\getEngine;

/**
 * Функция нахождения наибольшего общего делителя
 */

function nod(int $a, int $b)
{
    while ($a != $b) {
        if ($a > $b) {
            $a -= $b;
        } else {
            $b -= $a;
        }
    }
    return $a;
}

/**
 * Функция запуска игры наибольший общий делитель
 */

function gcd()
{
    $answersGcd = [];
    $lineQuestion = "Find the greatest common divisor of given numbers.";
    for ($i = 0; $i < 3; $i++) {
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
        $exp = $num1 . ' ' . $num2;
        $value = nod($num1, $num2);
        $answersGcd[] = [$exp, $value];
    }
    getEngine($answersGcd, $lineQuestion);
}
