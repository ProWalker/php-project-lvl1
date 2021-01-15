<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;

$attempts = 0;

line('Answer "yes" if the number is even, otherwise answer "no".');

while ($attempts < 3) {
    $number = rand();
    line('Question: ' . $number);
    $userAnswer = prompt('Your answer');
    $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';

    if ($userAnswer == $correctAnswer) {
        line('Correct!');
    } else {
        line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
        break;
    }

    $attempts++;
}

if ($attempts === 3) {
    line("Congratulations, {$name}!");
} else {
    line("Let's try again, {$name}!");
}