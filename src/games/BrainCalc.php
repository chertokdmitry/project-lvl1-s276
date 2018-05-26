<?php
namespace BrainGames\Games\BrainCalc;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Cli\gameEngine;

function run()
{
    $gameHeader = 'What is the result of the expression?';
    $promts = 3;

    $queryFunc = function () {
        
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $actionArray = ['-' => ($num1 - $num2),'+' => ($num1 + $num2),'*' => ($num1 * $num2)];
        $key = array_rand($actionArray);
        $questionString = $num1 . ' ' . $key . ' ' . $num2;

        return [$actionArray[$key], $questionString];
    };

    $resultFunc = function ($num) {
        return $num;
    };

    gameEngine($gameHeader, $promts, $queryFunc, $resultFunc);
}
