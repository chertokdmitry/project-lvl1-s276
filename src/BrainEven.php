<?php
namespace BrainGames\BrainEven;

use function \cli\line;
use function \cli\prompt;

function gameFunc($promts, $name)
{
    if ($promts == 3) {
            return line('Congratulations, ' . $name . '!');
    }

    $secretNum = rand(1, 100);
    line('Question ' . $secretNum);
    $userAnswer = prompt('Your answer');
    $rightAnswer = (isEven($secretNum)) ? 'yes' : 'no';

    if ($userAnswer == $rightAnswer) {
               return gameFunc($promts+1, $name);
    } else {
        return line("'" . $userAnswer . "' is wrong answer ;(. Correct answer was '" . $rightAnswer . "'.");
    }
}

function isEven($num)
{
    return ($num % 2 == 0);
}
