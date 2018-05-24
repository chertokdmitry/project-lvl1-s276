<?php
namespace BrainGames\BrainEven;

use function \cli\line;
use function \cli\prompt;

function even($promts, $name)
{
    $secretNum = rand(1, 100);
    line('Question ' . $secretNum);
    $userAnswer = prompt('Your answer');

    if (($userAnswer != 'yes') && ($userAnswer != 'no')) {
        return line('Incorrect answer');
    }

    $rightAnswer  = $secretNum % 2 == 0 ? 'yes' : 'no';

    if ($rightAnswer == $userAnswer) {
        $promts++;
        if ($promts < 3) {
            even($promts, $name);
        } else {
            return line('Congratulations, ' . $name . '!');
        }
    } else {
        return line("'" . $userAnswer . "' is wrong answer ;(. Correct answer was '" . $rightAnswer . "'.");
    }
}
