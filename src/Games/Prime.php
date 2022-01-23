<?php

namespace Brain\Games\Games\Prime;

function isPrime(int $number): bool
{
    for ($i = 2; $i <= $number / 2; $i += 1) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function createGameData(): callable
{
    return function (): array {
        $question = rand(2, 100);
        $answer = isPrime($question) ? 'yes' : 'no';
        return ['question' => $question, 'correctAnswer' => $answer];
    };
}
