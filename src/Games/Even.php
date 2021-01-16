<?php

namespace Brain\Games\Even;

use function Brain\Engine\startInfo;
use function Brain\Engine\gameInfo;
use function Brain\Engine\setQuestionData;
use function Brain\Engine\getTotalRounds;
use function Brain\Engine\startGame;

function dataForGameEven()
{
    return function () {
        $number = rand();
        $answer = $number % 2 === 0 ? 'yes' : 'no';
        return ['question' => $number, 'answer' => $answer];
    };
}
