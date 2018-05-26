<?php
namespace BrainGames\Games\BrainBalance;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Cli\gameEngine;

function test()
{
    function balance($arr)
    {
        sort($arr);
        $last = end($arr);
        if (($last - $arr[0]) < 2) {
            $digit = implode($arr);
            return  $digit;
        } else {
            $arr[0]++;
            $last--;
            return balance($arr);
        }
    }

    echo $num = rand(100, 10000);
    $numArray = (str_split($num));
    foreach ($numArray as $key => $value) {
        settype($numArray[$key], "int");
    }

    $digit = balance($numArray);
    echo 'Final: ' . $digit;
}
