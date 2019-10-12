<?php

namespace Functions\Nfq\Akademija\NotTyped;

function calculateHomeWorkSum(...$numbers): int
{
    $sum = 0;

    foreach ($numbers as $number) {
        $sum += $number;
    };

    return $sum;
}