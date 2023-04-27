<?php
namespace Php\Project\Games\Prime;

use function cli\line;
use function cli\prompt;
use function Php\Project\Engine\operation;
use function Php\Project\Engine\welcome;
use function Php\Project\Engine\isPrime;

function prime()
{
    $name = welcome();
    line('Answer "yes" if given number is prime. Otherwise answer "no"');
    $i = 0;
    while ($i != 3) {
        $num = rand(1, 100);
        line('Question: %s', $num);
        $answer = prompt('Your answer');
        $value = isPrime($num);
        if ($answer == $value) {
            echo "Correct!\n";
            $i++;
        } else {
            operation($answer, $value, $name);
            break;
        }
    }
    if ($i == 3) {
        line('Congratulations, %s!', $name);
    }
}