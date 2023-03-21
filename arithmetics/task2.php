<?php
function isAscending(int $n): bool
{
    $prev = $n % 10;
    while ($n >= 10) {
        $n = (int) ($n / 10);
        $digit = $n % 10;
        if ($digit >= $prev) {
            return false;
        }
        $prev = $digit;
    }

    return true;
}

var_export(isAscending(123)); // must be true