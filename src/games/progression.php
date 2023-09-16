<?php

namespace Php\Project\Games\Progression;

use function Php\Project\Engine\getEngine;

/**
 * Функция получения коллекции арифметической прогрессии
 */

function getProgression()
{
    $num1 = rand(1, 10);
    $num2 = rand(1, 10);
    $collect = [];
    $d = abs($num1 - $num2);
    if ($num1 < $num2) {
        $collect[0] = $num1;
        $collect[1] = $num2;
    } else {
        $collect[0] = $num2;
        $collect[1] = $num1;
    }
    $collect[] = $num2;
    for ($i = 2; $i < 10; $i++) {
        $collect[$i] = $collect[$i - 1] + $d;
    }
    return $collect;
}

/**
 * Функция запуска игры арифметическая прогрессия
 */

function arifProgression()
{
    $lineQuestion = "What number is missing in the progression";
    $i = 0;
    while ($i != 3) {
        $collect = getProgression();
        $index = rand(0, 9);
        $value = $collect[$index];
        $collect[$index] = '..';
        $strCollect = implode(' ', $collect);
        // собираем массив из трех выражений и их ответов
        $answersProgression[] = [$strCollect, $value];
        $i++;
    }
getEngine($answersProgression, $lineQuestion);
}
