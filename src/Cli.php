<?php
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function run($queryFunc, $resultFunc)
{
    line('Welcome to Brain Games!');
    line(GAME_TASK);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    $counter = 0;
    while ($counter < 3) {
        $checkAnswer = $queryFunc();
        line('Question ' . $checkAnswer[1]);
        $userAnswer = prompt('Your answer');
        $rightAnswer = $resultFunc($checkAnswer[0], $userAnswer);

        if ($rightAnswer == $userAnswer) {
            line('Correct!');
        } else {
            return line("'" . $userAnswer . "' is wrong answer ;(. Correct answer was '" . $rightAnswer . "'.");
        }
        $counter++;
    }
    line("Congritulations,%s! ", $name);
}
