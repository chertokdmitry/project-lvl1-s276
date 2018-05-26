<?php
namespace BrainGames\Games\BrainCalc;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Cli\run;

function runCalc()
{
    define("GAME_TASK", "What is the result of the expression?");
    $queryFunc = function () {
        
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $answer = ['-' => ($num1 - $num2),'+' => ($num1 + $num2),'*' => ($num1 * $num2)];
        $sign = array_rand($answer);
        $question = $num1 . ' ' . $sign . ' ' . $num2;

        return [$answer[$sign], $question];
    };

    $resultFunc = function ($num) {
        return $num;
    };

    run($queryFunc, $resultFunc);
}
