<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function startGame(): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $round = 0;
    $maxRounds = 3;
    while ($round < $maxRounds) {
        $number = rand(0, 100);
        $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';
        line('Answer "yes" if the number is even, otherwise answer "no".');
        line("Question: {$number}");
        $answer = prompt('Your answer');
        if ($correctAnswer !== strtolower($answer)) {
            line("'{$answer}'is wrong answer ;(. Correct answer was '{$correctAnswer}'.'");
            line("Let's try again, {$name}!");
            return;
        }
        line('Correct!');
        $round += 1;
    }
    line("Congratulations, {$name}!");
}
