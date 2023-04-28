<?php

namespace Php\Project\Games\Gcd;

use function cli\line;
use function cli\prompt;
use function Php\Project\Engine\operation;
use function Php\Project\Engine\welcome;
use function Php\Project\Engine\nod;

function gcd()
{
    $name = welcome();
    line("Find the greatest common divisor of given numbers.");
    $i = 0;
    while ($i != 3) {
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
        line("Question: %s %s", $num1, $num2);
        $value = nod($num1, $num2);
        $answer = prompt("Your answer");
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
