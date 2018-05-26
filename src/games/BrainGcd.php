<?php
namespace BrainGames\Games\BrainGcd;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Cli\gameEngine;

function run()
{
    $gameHeader = 'Find the greatest common divisor of given numbers.';
    $promts = 3;

    $queryFunc = function () {
            $findDivisorFunc = function ($a, $b) use (&$findDivisorFunc) {
                $large = $a > $b ? $a: $b;
                $small = $a > $b ? $b: $a;
                $remainder = $large % $small;
                return 0 == $remainder ? $small : $findDivisorFunc($small, $remainder);
            };

        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $divisor = $findDivisorFunc($num1, $num2);

        if ($divisor < 2) {
            while ($divisor < 2) {
                $num1 = rand(1, 100);
                $num2 = rand(1, 100);
                $divisor = $findDivisorFunc($num1, $num2);
            }
        }
        $questionString = $num1 . ' ' . $num2;
        return [$divisor, $questionString];
    };

    $resultFunc = function ($num) {
        return $num;
    };
    gameEngine($gameHeader, $promts, $queryFunc, $resultFunc);
}
