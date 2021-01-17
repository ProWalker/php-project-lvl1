<?php

namespace Brain\Games\Calc;

function dataForGameCalc()
{
    return function () {
        $operations = ['+', '-', '*'];
        $maxValue = 100;
        $number1 = rand(0, $maxValue);
        $number2 = rand(0, $maxValue);
        $operation_index = rand(1, count($operations)) - 1;
        $operation = $operations[$operation_index];
        $question = "{$number1} {$operation} {$number2}";
        $answer = getOperationResult($number1, $number2, $operation);
        return ['question' => $question, 'answer' => $answer];
    };
}

function getOperationResult($num1, $num2, $operation)
{
    $result = 0;

    switch ($operation) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
    }

    return $result;
}
