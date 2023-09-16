<?php

namespace Php\Project\Games\Paritygame;

use function Php\Project\Engine\getEngine;

/**
 * Функция получения трех значений и их проверок на четность
 */

 function getThreeAnswersEven()
 {
    $answerEven = [];
     for($i = 0; $i < 3; $i++) {
         $num = rand(1, 20);
         // собираем в массив значения и ответы       
         $answerEven[] = (($num % 2) == 0) ? [$num, 'yes'] : [$num, 'no'];
         }
     return $answerEven;
 }

 /**
 * Функция запуска игры четное нечетное
 */

function parity()
{
    $lineQuestion = 'Answer "yes" if the number is even, otherwise answer "no".';
    $answersEven = getThreeAnswersEven();
    getEngine($answersEven, $lineQuestion);
}
