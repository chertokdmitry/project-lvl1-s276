<?php
namespace BrainGames\Games\BrainEven;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Cli\run;

function isEven($num)
{
    return ($num % 2 == 0);
}

function runEven()
{
    define("GAME_TASK", "Answer 'yes' if number even otherwise answer 'no'.");
    
    $func = function () {

        $num = rand(1, 100);
        $rightAnswer = isEven($num) ? 'yes' : 'no';
        return [$rightAnswer, $num];
    };

    run($func);
}
