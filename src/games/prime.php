<?php
namespace Games\Prime;

use function \cli\line;
use function \cli\prompt;
use function \Game\run;

const GAME_TASK = "Answer 'yes' if number prime otherwise answer 'no'.";
const RAND_MIN = 10;
const RAND_MAX = 100;

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i < $num / 2; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function game()
{
    $func = function () {

        $question = rand(RAND_MIN, RAND_MAX);
        $answer = isPrime($question) ? 'yes' : 'no';
        return [$answer, $question];
    };

    run($func, GAME_TASK);
}
