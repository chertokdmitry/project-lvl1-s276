<?php
namespace Games\Calc;

use function \cli\line;
use function \cli\prompt;
use function \Game\run;

const GAME_TASK = 'What is the result of the expression?';
const RAND_MIN = 1;
const RAND_MAX = 100;
const OPERATIONS = ['-', '+', '*'];

function game()
{
    $func = function () {
        
        $num1 = rand(RAND_MIN, RAND_MAX);
        $num2 = rand(RAND_MIN, RAND_MAX);
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
        return [strval($answer), $question];
    };

    run($func, GAME_TASK);
}
