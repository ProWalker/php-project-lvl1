<?php

namespace Brain\Engine;

use function cli\line;
use function cli\prompt;

function welcome()
{
    line('Welcome to the Brain Games!');
}

function getUsername()
{
    return prompt('May I have your name?');
}

function greetings(string $name)
{
    line("Hello, %s!", $name);
}

function startInfo()
{
    global $username;
    welcome();
    $username = getUsername();
    greetings($username);
}

function gameInfo(string $info)
{
    line($info);
}

function getTotalRounds(): int
{
    return 3;
}

function isGameOver(int $round): bool
{
    return $round >= getTotalRounds();
}

function runGame($dataCreator)
{
    global $username;
    $round = 0;

    while ($round < getTotalRounds()) {
        $gameData = $dataCreator();
        line('Question: %s', $gameData['question']);
        $userAnswer = prompt('Your answer');

        if ($userAnswer == $gameData['answer']) {
            line('Correct!');
            $round++;
        } else {
            line("%s is wrong answer ;(. Correct answer was %s.", $userAnswer, $gameData['answer']);
            break;
        }
    }

    if ($round === getTotalRounds()) {
        line("Congratulations, %s!", $username);
    } else {
        line("Let's try again, %s!", $username);
    }
}
