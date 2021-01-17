<?php

namespace Brain\Games\Progression;

function dataForGameProgression()
{
    return function () {
        $start = rand(1, 100);
        $step = rand(2, 20);
        $length = rand(5, 20);
        $progression = createArithmeticProgression($start, $step, $length);
        $index = rand(0, count($progression));
        $answer = $progression[$index];
        $progression[$index] = '..';
        $question = implode(' ', $progression);
        return ['question' => $question, 'answer' => $answer];
    };
}

function createArithmeticProgression(int $start, int $step, int $length)
{
    $result = [];
    $num = $start;
    for ($i = 0; $i < $length; $i++) {
        $result[] = $num;
        $num += $step;
    }
    return $result;
}
