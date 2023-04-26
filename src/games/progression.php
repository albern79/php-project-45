<?php
namespace Php\Project\Games\Progression;

use function cli\line;
use function cli\prompt;
use function Php\Project\Engine\operation;
use function Php\Project\Engine\welcome;
use function Php\Project\Engine\progression;


function arifProgression()
{
    $name = welcome();
    line("What number is missing in the progression");
    $i = 0;
    while ($i != 3) {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $collect = progression($num1, $num2);
        $index = rand(0, 9);
        $value = $collect[$index];
        $collect[$index] = '..';
        $strCollect = implode(' ', $collect);
        line("Question: %s", $strCollect);
        //$value = nod($num1, $num2);
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
