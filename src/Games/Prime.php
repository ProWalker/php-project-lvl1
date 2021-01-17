<?php

namespace Brain\Games\Prime;

function dataForGamePrime()
{
    return function () {
        $number = rand(2, 100);
        $answer = isPrime($number) ? 'yes' : 'no';
        return ['question' => $number, 'answer' => $answer];
    };
}

function isPrime(int $num)
{
    $flag = true;
    $k = 2;
    $n = intval(sqrt($num));
    while ($k <= $n and $flag) {
        if ($num % $k == 0) {
            $flag = false;
        }
        $k++;
    }
    return $flag;
}
