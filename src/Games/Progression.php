<?php

namespace Brain\Games\Games\Progression;

function makeProgression($start, $len, $step)
{
    $result = [];
    $currentNum = $start;
    for ($i = 0; $i < $len; $i++, $currentNum += $step) {
        $result[] = $currentNum;
    }
    return $result;
}

function progression(): callable
{
    return function (): array {
        $len = 10;
        $array = makeProgression(rand(0, 20), $len, rand(2, 10));
        $hiddenIndex = rand(0, $len - 1);
        $answer = $array[$hiddenIndex];
        $array[$hiddenIndex] = '..';
        $question = implode(' ', $array);
        return ['question' => $question, 'correctAnswer' => (string)$answer];
    };
}
