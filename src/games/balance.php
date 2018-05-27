<?php
namespace Games\Balance;

use function \cli\line;
use function \cli\prompt;
use function \Game\run;

const GAME_TASK = 'Balance the given number?';
const RAND_MIN = 100;
const RAND_MAX = 10000;

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

        $question = rand(RAND_MIN, RAND_MAX);
        $answer = getAnswer($question);
        return [$answer, $question];
    };

    run($func, GAME_TASK);
}
