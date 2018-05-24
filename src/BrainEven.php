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
    $userAnswer = userAnswer($secretNum);
    $rightAnswer = (isEven($secretNum)) ? 'yes' : 'no';

    if (checkEquals($rightAnswer, $userAnswer)) {
               gameFunc($promts+1, $name);
    } else {
        return line("'" . $userAnswer . "' is wrong answer ;(. Correct answer was '" . $rightAnswer . "'.");
    }
}

function userAnswer($num)
{
    line('Question ' . $num);
    return prompt('Your answer');
}

function checkEquals($num1, $num2)
{
    return ($num1 == $num2);
}

function isEven($num)
{
    return ($num % 2 == 0);
}
