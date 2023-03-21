<?php
function isSymmetric(int $n, int $m): bool
{
    $copy = $number = 2 * $n * $m;
    $length = 0;
    while ($copy > 0) {
        $length++;
        $copy = (int) ($copy / 10);
    }

    $copy = $number;

    for ($i = 0; $i < $length / 2; $i++) {
        $lastDigit = $copy % 10;
        $firstDigit = (int) ($copy / (10 ** ($length - $i - 1)));
        $copy = (int) ($copy / 10);
        if ($lastDigit !== $firstDigit) {
            return false;
        }
    }

    if (!($length % 2)) {
        return true;
    }

    return false;
}

var_export(isSymmetric(1, 11)); // 22 must be true
var_export(isSymmetric(2, 10)); // 40 must be false
var_export(isSymmetric(222, 1)); // 444 must be false
var_export(isSymmetric(2222, 2)); // 8888 must be true