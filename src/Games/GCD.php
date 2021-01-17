<?php

namespace Brain\Games\GCD;

function dataForGameGCD()
{
    return function () {
        $maxValue = 200;
        $a = rand(0, $maxValue);
        $b = rand(0, $maxValue);
        $question = "{$a} {$b}";
        while ($a !== 0 and $b !== 0) {
            if ($a > $b) {
                $a = $a % $b;
            } else {
                $b = $b % $a;
            }
        }
        $answer = $a + $b;
        return ['question' => $question, 'answer' => $answer];
    };
}
