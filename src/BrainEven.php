<?php
namespace BrainGames\BrainEven;

use function \cli\line;
use function \cli\prompt;

function even($promts, $name)
{
    $secretNum = rand(1, 100);
    line('Question ' . $secretNum);
    $answer = prompt('Your answer');
    $goodBye = [];

    if (($answer != 'yes') && ($answer != 'no')) {
        return line('Incorrect answer');
    }

    if ($secretNum % 2 == 0) {
        if ($answer == 'yes') {
            line('Correct!');
            $promts++;
        } else {
            $goodBye = ['no', 'yes'];
        }
    } else {
        if ($answer == 'no') {
            line('Correct!');
            $promts++;
        } else {
            $goodBye = ['yes', 'no'];
        }
    }
    
    if (!empty($goodBye)) {
        line("'" . $goodBye[0] . "' is wrong answer ;(. Correct answer was '" . $goodBye[1] . "'.");
        line("Let's try again " . $name);
        return;
    }

    if ($promts < 3) {
        even($promts, $name);
    } else {
        line('Congratulations, ' . $name . '!');
    }
}
