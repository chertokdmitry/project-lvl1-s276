<?php
namespace BrainGames\Games\BrainGcd;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Cli\run;

function runGcd()
{
    define("GAME_TASK", "Find the greatest common divisor of given numbers.");

    $func = function () {
            $findDivisor = function ($a, $b) use (&$findDivisor) {
                $large = $a > $b ? $a: $b;
                $small = $a > $b ? $b: $a;
                $remainder = $large % $small;
                return 0 == $remainder ? $small : $findDivisor($small, $remainder);
            };

        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $divisor = $findDivisor($num1, $num2);

        if ($divisor < 2) {
            while ($divisor < 2) {
                $num1 = rand(1, 100);
                $num2 = rand(1, 100);
                $divisor = $findDivisor($num1, $num2);
            }
        }
        $question = $num1 . ' ' . $num2;
        return [$divisor, $question];
    };

    run($func);
}
