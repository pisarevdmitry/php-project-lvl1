<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function startGame(string $gameText, callable $genQuestion): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $round = 0;
    $maxRounds = 3;
    line($gameText);
    while ($round < $maxRounds) {
        ['question' => $question, 'correctAnswer' => $correctAnswer] = $genQuestion();
        line("Question: {$question}");
        $answer = prompt('Your answer');
        if ($correctAnswer !== strtolower($answer)) {
            line("'{$answer}'is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }
        line('Correct!');
        $round += 1;
    }
    line("Congratulations, {$name}!");
}
