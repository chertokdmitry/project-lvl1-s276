<?php
namespace BrainGames\Games\BrainGcd;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Cli\run;

const GAME_TASK = 'Find the greatest common divisor of given numbers.';


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
        $answer = 0;

        if ($answer < 2) {
            while ($answer < 2) {
                $a = rand(1, 100);
                $b = rand(1, 100);
                $answer = getDivisor($a, $b);
            }
        }

        $question = $a . ' ' . $b;
        return [$answer, $question];
    };

    run($func, GAME_TASK);
}
