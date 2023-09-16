<?php

namespace Php\Project\Games\Prime;

use function cli\line;
use function Php\Project\Engine\getEngine;

/**
 * @param int $number
 * @return string
 * проверка на четность
 */
function isPrime(int $number)
{
    $flag = "yes";
    if ($number === 1) {
        $flag = "no";
        return $flag;
    }
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            $flag = "no";
            break;
        }
    }
    return $flag;
}

/**
 * Функция запуска игры проверки на четность
 */

function getPrime()
{
    $lineQuestion = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $answersPrime = [];
    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);   
        $value = isPrime($number);
        // собираем массив из трех чисел и ответов на четность
        $answersPrime[] = [$number, $value];
    }
    
    getEngine($answersPrime, $lineQuestion);
}
