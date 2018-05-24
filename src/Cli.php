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
    line(BrainEven\gameFunc(0, $name));
}
