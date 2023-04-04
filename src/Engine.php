<?php
namespace Php\Project\Engine;

use function cli\line;
use function cli\prompt;

function welcome()
{
    line('Welcome to the Brain Game!');
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
