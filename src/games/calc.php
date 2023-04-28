<?php

namespace Php\Project\Games\Calc;

use function cli\line;
use function cli\prompt;
use function Php\Project\Engine\operation;
use function Php\Project\Engine\welcome;

function calc()
{
    $name = welcome();
    line('What is the result of the expression?');
    $i = 0;
    while ($i != 3) {
        $operands = ['+', '-', '*'];
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
        $operand = $operands[array_rand($operands, 1)];
        $exp = $num1 . ' ' . $operand . ' ' . $num2;
        line('Question: %s', $exp);
        $answer = prompt('Your answer');
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
