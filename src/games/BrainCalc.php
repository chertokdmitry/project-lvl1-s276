<?php
namespace BrainGames\Games\BrainCalc;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Cli\run;

const GAME_TASK = 'What is the result of the expression?';
const OPERATIONS = ['-', '+', '*'];

function game()
{
    $func = function () {
        
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $key = array_rand(OPERATIONS);

        switch (OPERATIONS[$key]) {
            case '-':
                $answer = $num1 - $num2;
                break;
            case '+':
                $answer = $num1 + $num2;
                break;
            case '*':
                $answer = $num1 * $num2;
                break;
        }

        $question = $num1 . ' ' . OPERATIONS[$key] . ' ' . $num2;
        return [$answer, $question];
    };

    run($func, GAME_TASK);
}
