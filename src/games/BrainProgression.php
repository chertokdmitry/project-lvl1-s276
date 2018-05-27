<?php
namespace BrainGames\Games\BrainProgression;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Cli\run;

const GAME_TASK = 'What number is missing in this progression?';

function game()
{
    $func = function () {

        $progression = '';
        $num= rand(10, 100);
        $step = rand(3, 9);

        for ($i=0; $i < 10; $i++) {
            $progression[] = $num;
            $num = $num + $step;
        }
    
        $key = array_rand($progression);
        $answer = $progression[$key];
        $progression[$key] = '..';
        $question = implode(" ", $progression);

        return [$answer, $question];
    };

    run($func, GAME_TASK);
}
