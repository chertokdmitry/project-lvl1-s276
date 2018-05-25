<?php
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function gameEngine($gameHeader, $promts, $queryFunc, $resultFunc)
{
    line('Welcome to Brain Games!');
    line($gameHeader);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    $counter = 0;
    while ($counter < $promts) {

        $questionArray = $queryFunc();

        line('Question ' . $questionArray[1]);
        $userAnswer = prompt('Your answer');
        $rightAnswer = $resultFunc($questionArray[0], $userAnswer);

        if ($rightAnswer == $userAnswer) {
            line('Correct!');
        } else {
            return line("'" . $userAnswer . "' is wrong answer ;(. Correct answer was '" . $rightAnswer . "'.");
        }
        $counter++;
    }
    line("Congritulations,%s! ", $name);
}
