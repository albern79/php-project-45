<?php

namespace Php\Project\Games\Paritygame;

use function cli\line;
use function cli\prompt;
use function Php\Project\Engine\operation;
use function Php\Project\Engine\welcome;

/**
 * Функция проверки на четность.
 */
function parity()
{
    $name = welcome();
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $i = 0;
    while ($i != 3) {
        $num = rand(1, 20);
        line('Question: %s', $num);
        $answer = prompt('Your answer');
        if (($num % 2 == 0 & $answer == 'yes') or ($num % 2 != 0 & $answer == 'no')) {
            echo "Correct!\n";
            $i++;
        } else {
            if ($num % 2 == 0 & $answer == 'no') {
                $value = 'no';
                $goodanswer = 'yes';
            } else {
                $value = 'yes';
                $goodanswer = 'no';
            }
            operation($goodanswer, $value, $name);
            break;
        }
    }
    if ($i == 3) {
        line('Congratulations, %s!', $name);
    }
}
