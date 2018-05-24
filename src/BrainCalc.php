<?php
namespace BrainGames\BrainCalc;

use function \cli\line;
use function \cli\prompt;

function calc($promts, $name)
{
    if ($promts == 3) {
        return line('Congratulations, ' . $name . '!');
    }

    $secretNum = rand(1, 100);
    line('Question ' . $secretNum);
    $userAnswer = prompt('Your answer');
    $rightAnswer = 'no';

    if (isEven($secretNum)) {
        $rightAnswer = 'yes';
    }

    if ($userAnswer == $rightAnswer) {
        $promts++;
        even($promts, $name);
    } else {
        return line("'" . $userAnswer . "' is wrong answer ;(. Correct answer was '" . $rightAnswer . "'.");
    }
}

function isEven($num)
{
    if ($num % 2 == 0) {
        return true;
    }
    return false;
}
