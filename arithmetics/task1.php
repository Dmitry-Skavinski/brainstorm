<?php

function countDigitsLessThan5(int $number): int
{
    $count = 0;
    while ($number > 10) {
        if ($number % 10 < 5) {
            $count++;
        }

        $number = (int) $number / 10;
    }

    return $count;
}

echo countDigitsLessThan5(5215712895712957151); // should be 8
