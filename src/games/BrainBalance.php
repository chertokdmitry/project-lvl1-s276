<?php
namespace BrainGames\Games\BrainBalance;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Cli\run;

function balance($arr, $lastkey)
    {
        sort($arr);
        $last = end($arr);
        if (($arr[$lastkey] - $arr[0]) < 2) {
            $digit = implode($arr);
            return  $digit;
        } else {
            $arr[0]++;
            $arr[$lastkey]--;
            return balance($arr, $lastkey);
        }
    }

function test()
{
    define("GAME_TASK", "Balance the given number.");
    
    $func = function () {

    echo $num = rand(100, 10000);
    $numArray = (str_split($num));
    $lastkey = sizeof($numArray)-1;
    foreach ($numArray as $key => $value) {
        settype($numArray[$key], "int");
    }

    $digit = balance($numArray, $lastkey);
    echo $digit;
    return [$digit, $num];
    };

    run($func);
}
