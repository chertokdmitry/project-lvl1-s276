<?php
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function run($gameFunc)
{
    line('Welcome to Brain Games!');
    line(GAME_TASK);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    $counter = 0;
    while ($counter < 3) {
        $checkAnswer = $gameFunc();
        line('Question ' . $checkAnswer[1]);
        $userAnswer = prompt('Your answer');

        if ($checkAnswer[0] == $userAnswer) {
            line('Correct!');
        } else {
            return line("'" . $userAnswer . "' is wrong answer ;(. Correct answer was '" . $checkAnswer[0] . "'.");
        }
        $counter++;
    }
    
    line("Congritulations,%s! ", $name);
}
