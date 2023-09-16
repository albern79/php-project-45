<?php

namespace Php\Project\Games\Progression;

use function Php\Project\Engine\getEngine;

/**
 * Функция получения коллекции арифметической прогрессии
 */

function getCollectProgression()
{
    $valueOne = rand(1, 10);
    $valueTwo = rand(1, 10);
    $collect = [];
    $differenceProgression = abs($valueOne - $valueTwo);
    if ($valueOne < $valueTwo) {
        $collect[0] = $valueOne;
        $collect[1] = $valueTwo;
    } else {
        $collect[0] = $valueTwo;
        $collect[1] = $valueOne;
    }
    $collect[] = $valueTwo;
    for ($i = 2; $i < 10; $i++) {
        $collect[$i] = $collect[$i - 1] + $differenceProgression;
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
        $collect = getCollectProgression();
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
