<?php
namespace BrainGames\Games\BrainEven;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Cli\run;

const GAME_TASK = "Answer 'yes' if number even otherwise answer 'no'.";

function isEven($num)
{
    return ($num % 2 == 0);
}

function runEven()
{   
    $func = function () {

        $num = rand(1, 100);
        $rightAnswer = isEven($num) ? 'yes' : 'no';
        return [$rightAnswer, $num];
    };

    run($func, GAME_TASK);
}
