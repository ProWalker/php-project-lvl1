<?php

namespace Brain\Games\Even;

function dataForGameEven()
{
    return function () {
        $number = rand();
        $answer = $number % 2 === 0 ? 'yes' : 'no';
        return ['question' => $number, 'answer' => $answer];
    };
}
