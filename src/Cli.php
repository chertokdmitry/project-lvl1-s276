<?php
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

const PROMTS = 3;

function run($gameFunc, $gameTask)
{
    line('Welcome to Brain Games!');
    line($gameTask);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    $counter = 0;
    while ($counter < PROMTS) {
        $getParam = $gameFunc();
        $answer = $getParam[0];
        $question = $getParam[1];
        line('Question ' . $question);
        $userAnswer = prompt('Your answer');

        if ($answer == $userAnswer) {
            line('Correct!');
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$answer}'");
            line("Lets try again, %s!", $name);
            return;
        }
        $counter++;
    }
    
    line("Congritulations, %s!", $name);
    return;
}
