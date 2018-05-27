<?php
namespace BrainGames\Games\BrainBalance;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Cli\run;

const GAME_TASK = 'Balance the given number?';

function getAnswer($num)
{
    $answer = [];
    $i = 0;

    $sum = array_sum(str_split($num));
    $symbols = strlen(strval($num));
    
    $mainDigit = floor($sum / $symbols);
    $remDivision = $sum % $symbols;

    while ($i < $symbols) {
        if ($remDivision > 0) {
            $answer[] = $mainDigit + 1;
            $remDivision--;
        } else {
            $answer[] = $mainDigit;
        }
        $i++;
    }
    
    sort($answer);
    $answer = implode($answer);
    return $answer;
}

function game()
{
    $func = function () {

        $question = rand(100, 10000);
        $numArray = (str_split($question));
        $lastkey = sizeof($numArray)-1;

        foreach ($numArray as $key => $value) {
            settype($numArray[$key], "int");
        }

        $answer = getAnswer($question);
        return [$answer, $question];
    };

    run($func, GAME_TASK);
}
