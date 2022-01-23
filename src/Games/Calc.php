<?php

namespace Brain\Games\Games\Calc;

function createGameData(): callable
{
    return function () {
        $mapping = [
            '+' => fn($a, $b) => $a + $b,
            '-' => fn($a, $b) => $a - $b,
            '*' => fn($a, $b) => $a * $b,
        ];
        $operations = ['-', '+', '*'];
        $firstNumber = rand(0, 100);
        $secondNumber = rand(0, 100);
        $operand = $operations[rand(0, count($operations) - 1)];
        $question = "{$firstNumber} {$operand} {$secondNumber}";
        $correctAnswer = $mapping[$operand]($firstNumber, $secondNumber);
        return ['question' => $question, 'correctAnswer' => (string)$correctAnswer];
    };
}
