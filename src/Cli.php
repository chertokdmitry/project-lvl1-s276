<?php
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;
use BrainGames\BrainEven;

function run($game)
{
    line('Welcome to Brain Games!');
    line('Answer "yes" if number even otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    if ($game == 1) {
        BrainEven\even(0, $name);
    }

    if ($game == 2) {
        BrainCalc\calc(0, $name);
    }
}
