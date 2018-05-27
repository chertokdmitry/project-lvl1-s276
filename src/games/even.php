<?php
namespace Games\Even;

use function \cli\line;
use function \cli\prompt;
use function \Game\run;

const GAME_TASK = "Answer 'yes' if number even otherwise answer 'no'.";
const RAND_MIN = 1;
const RAND_MAX = 100;

function isEven($num)
{
    return ($num % 2 == 0);
}

function game()
{
    $func = function () {

        $question = rand(RAND_MIN, RAND_MAX);
        $answer = isEven($question) ? 'yes' : 'no';
        return [$answer, $question];
    };

    run($func, GAME_TASK);
}
