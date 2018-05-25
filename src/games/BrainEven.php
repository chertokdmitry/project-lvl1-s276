<?php
namespace BrainGames\Games\BrainEven;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Cli\gameEngine;

function run()
{
    $gameHeader = 'Answer "yes" if number even otherwise answer "no".';
    $promts = 3;

    $queryFunc = function () {
        $num = rand(1, 100);
        return [$num, $num];
    };

    $resultFunc = function ($num) {
        $rightAnswer = ($num % 2 == 0) ? 'yes' : 'no';
        return $rightAnswer;
    };

    gameEngine($gameHeader, $promts, $queryFunc, $resultFunc);
}
