<?php
namespace BrainGames\Games\BrainEven;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Cli\run;

function runEven()
{
    define("GAME_TASK", "Answer 'yes' if number even otherwise answer 'no'.");
    
    function isEven($num)
    {
        return ($num % 2 === 0);
    }

    $queryFunc = function () {
        $num = rand(1, 100);
        return [$num, $num];
    };

    $resultFunc = function ($num) {
        $rightAnswer = isEven($num) ? 'yes' : 'no';
        return $rightAnswer;
    };

    run($queryFunc, $resultFunc);
}
