<?php
function isAscendingOrDescending(int $n): bool
{
    $prev = $n % 10;
    $isAscending = true;
    $isDescending = true;
    while ($n >= 10 && ($isAscending || $isDescending)) {
        $n = (int) ($n / 10);
        $digit = $n % 10;

        if ($digit >= $prev) {
            $isAscending = false;
        }

        if ($digit <= $prev) {
            $isDescending = false;
        }

        $prev = $digit;
    }

    return $isAscending || $isDescending;
}

for ($i = 1000; $i < 10000; $i+=2) {
    if (isAscendingOrDescending($i)) {
        echo $i . PHP_EOL;
    }
}
