<?php

function isAscendingOrDescending(array $plainArray): bool
{
    $isAscending = true;
    $isDescending = true;
    for ($i = 1; $i < count($plainArray); $i++) {
        if ($plainArray[$i] >= $plainArray[$i - 1]) {
            $isDescending = false;
        }

        if ($plainArray[$i] <= $plainArray[$i - 1]) {
            $isAscending = false;
        }
    }

    return $isAscending || $isDescending;
}

function minMaxOfAscOrDescRows(array $matrix): array
{
    $min = PHP_FLOAT_MAX;
    $max = PHP_FLOAT_MIN;
    for ($i = 0; $i < count($matrix); $i++) {
        if (isAscendingOrDescending($matrix[$i])) {
            $firstInRow = $matrix[$i][0];
            $lastInRow = $matrix[$i][count($matrix[$i]) - 1];
            $minInRow = $firstInRow < $lastInRow ? $firstInRow : $lastInRow;
            $maxInRow = $firstInRow > $lastInRow ? $firstInRow : $lastInRow;

            if ($maxInRow > $max) {
                $max = $maxInRow;
            }

            if ($minInRow < $min) {
                $min = $minInRow;
            }
        }
    }

    return ['max' => $max, $min => $min];
}

$matrix = [
    [1, 2, 3],
    [2, 3, 4],
    [5, 0, 0],
];

print_r(minMaxOfAscOrDescRows($matrix)); // min: 1; max: 4
