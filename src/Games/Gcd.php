<?php

namespace Brain\Games\Games\Gcd;

function findGcd(int $number1, int $number2)
{
    $max = $number1 > $number2 ? $number1 : $number2;
    $min = $number1 > $number2 ? $number2 : $number1;
    $remainder = $max % $min;
    if ($remainder === 0) {
        return $min;
    }
    return findGcd($min, $remainder);
}

function createGameData(): callable
{
    return function (): array {
        $firstNumber = rand(1, 100);
        $secondNumber = rand(1, 100);
        $question = "{$firstNumber} {$secondNumber}";
        $number1 = $firstNumber;
        $number2 = $secondNumber;
        $correctAnswer = findGcd($number1, $number2);
        return ['question' => $question, 'correctAnswer' => (string)$correctAnswer];
    };
}
