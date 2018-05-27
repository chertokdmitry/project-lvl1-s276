<?php
namespace Games\Progression;

use function \cli\line;
use function \cli\prompt;
use function \Game\run;

const GAME_TASK = 'What number is missing in this progression?';
const RAND_MIN = 10;
const RAND_MAX = 100;
const STEP_START = 3;
const STEP_FINISH = 9;
const LENGTH = 10;


function game()
{
    $func = function () {

        $progression = '';
        $first = rand(RAND_MIN, RAND_MAX);
        $step = rand(STEP_START, STEP_FINISH);

        for ($i=0; $i < LENGTH; $i++) {
            $progression[] = $first;
            $first = $first + $step;
        }
    
        $key = array_rand($progression);
        $answer = $progression[$key];
        $progression[$key] = '..';
        $question = implode(" ", $progression);

        return [strval($answer), $question];
    };

    run($func, GAME_TASK);
}
