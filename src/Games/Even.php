<?php

namespace Brain\Games\Games\Even;

function createGameData(): callable
{
    return function (): array {
        $number = rand(0, 100);
        $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';
        return ['question' => $number, 'correctAnswer' => $correctAnswer];
    };
}
