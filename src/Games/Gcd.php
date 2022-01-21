<?php

namespace Brain\Games\Games\Gcd;

function gcd(): callable
{
    return function (): array {
        $firstNumber = rand(0, 100);
        $secondNumber = rand(0, 100);
        $question = "{$firstNumber} {$secondNumber}";
        $number1 = $firstNumber;
        $number2 = $secondNumber;
        do {
            $max = $number1 > $number2 ? $number1 : $number2;
            $min = $number1 > $number2 ? $number2 : $number1;
            $remainder = $max % $min;
            $number1 = $min;
            $number2 = $remainder;
        } while ($remainder !== 0);
        return ['question' => $question, 'correctAnswer' => (string)$min];
    };
}
