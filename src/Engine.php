<?php
namespace Php\Project\Engine;

use function cli\line;
use function cli\prompt;

function welcome()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function operation($answer, $value, $name)
{
    line(" '%s' is wrong answer", $answer);
    line("Correct answer was '%s'", $value);
    line("Let's try again, %s", $name);
}

function nod($a, $b)
{
    while ($a != $b) {
        if ($a > $b) {
            $a -= $b;
        } else {
            $b -= $a;
        }
    }
    return $a;
}

function progression($num1, $num2)
{
    $d = abs($num1 - $num2);
    if ($num1 < $num2) {
        $collect[0] = $num1;
        $collect[1] = $num2;
    } else {
        $collect[0] = $num2;
        $collect[1] = $num1;
    }
    $collect[] = $num2;
    for ($i = 2; $i < 10; $i++) {
        $collect[$i] = $collect[$i - 1] + $d;
    }
    return $collect;
}

function isPrime($num)
{
    $flag = "yes";
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            $flag = "no";
            break;
        }
    }
    return $flag;
}
