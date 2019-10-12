<?php

namespace Functions\Nfq\Akademija\Soft;

function calculateHomeWorkSum(int ...$numbers): int
{
    $sum = 0;

    foreach ($numbers as $number) {
        $sum += $number;
    };

    return $sum;
}