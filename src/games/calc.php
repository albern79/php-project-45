<?php

namespace Php\Project\Games\Calc;

use function Php\Project\Engine\getEngine;

/**
 * Функция запуска игры калькулятор
 */

function calc()
{
    $lineQuestion = 'What is the result of the expression?';
    $i = 0;
    $answersCalc = [];
    while ($i != 3) {
        $operands = ['+', '-', '*'];
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
        $operand = $operands[array_rand($operands, 1)];
        // собираем выражение из двух чисел и операнда.
        $exp = $num1 . ' ' . $operand . ' ' . $num2;
        switch ($operand) {
            case '+':
                $value = $num1 + $num2;
                break;
            case '-':
                $value = $num1 - $num2;
                break;
            case '*':
                $value = $num1 * $num2;
                break;
        }
        // собираем массив из трех выражений и их ответов
        $answersCalc[] = [$exp, $value];
        $i++;
    }
    getEngine($answersCalc, $lineQuestion);
}
