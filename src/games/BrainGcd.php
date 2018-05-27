<?php
namespace BrainGames\Games\BrainGcd;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Game\run;

const GAME_TASK = 'Find the greatest common divisor of given numbers.';
const MIN = 2;
const MAX = 100;

function getDivisor($a, $b)
{
    $large = $a > $b ? $a: $b;
    $small = $a > $b ? $b: $a;
    $remainder = $large % $small;
    return 0 == $remainder ? $small : getDivisor($small, $remainder);
}

function game()
{
    $func = function () {
        
        $num1 = rand(MIN, MAX);
        $num2 = rand(MIN, MAX);
        $answer = getDivisor($num1, $num2);
        $question = $num1 . ' ' . $num2;

        return [strval($answer), $question];
    };

    run($func, GAME_TASK);
}
