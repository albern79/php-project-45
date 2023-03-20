<?php
namespace Php\Project\Paritygame;

use function cli\line;
use function cli\prompt;
/**
 * Функция проверки на четность.
 */
function parity()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no"');
    $i = 0;
    while ($i != 3) {
        $num = rand(1, 20);
        line('Question: %s', $num);
        $answer = prompt('Your answer');
        if (($num % 2 == 0 & $answer == 'yes') or $num % 2 != 0 & $answer == 'no') {
            echo "Correct!\n";
            $i++;
        } else {
            if ($answer == 'yes') {
                line("'yes' is wrong answer ;(.");
                line("Let try again, %s", $name);
                break;
            } else {
                line("Correct answer was 'no'");
                line("Let's try again, %s", $name);
                break;
            }
        }
    }
    if ($i == 3) {
        line('Congratulations, %s!', $name);
    }
}



