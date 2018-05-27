<?php
namespace BrainGames\Games\BrainEven;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Cli\run;

const GAME_TASK = "Answer 'yes' if number even otherwise answer 'no'.";

function isEven($num)
{
    return ($num % 2 == 0);
}

function game()
{
    $func = function () {

        $question = rand(1, 100);
        $answer = isEven($question) ? 'yes' : 'no';
        return [$answer, $question];
    };

    run($func, GAME_TASK);
}
