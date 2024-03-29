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

function getEngine(array $arrayAnswersQuestions, string $lineQuestion)
{
    $name = welcome();
    line($lineQuestion);
    foreach ($arrayAnswersQuestions as $value) {
        line('Question: %s', $value[0]);
        $answer = prompt('Your answer');
        if ($answer == $value[1]) {
            echo "Correct!\n";
        } else {
            line(" '%s' is wrong answer ;(", $answer);
            line("Correct answer was '%s'", $value);
            line("Let's try again, %s!", $name);
            return false;
        }
    }
    line('Congratulations, %s!', $name);
}
