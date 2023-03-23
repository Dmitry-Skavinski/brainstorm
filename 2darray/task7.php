<?php
function replaceLargestElementsInTriangles(array $matrix): array
{
    $largest = PHP_FLOAT_MIN;
    for ($i = 1; $i < count($matrix); $i++) {
        for ($j = 0; $j < $i; $j++) {
            if ($matrix[$i][$j] >= $largest) {
                $largest = $matrix[$i][$j];
                $largestRowBelow = $i;
                $largestColBelow = $j;
            }
        }
    }

    $largest = PHP_FLOAT_MIN;
    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = count($matrix) - 1; $j > $i; $j--) {
            if ($matrix[$i][$j] >= $largest) {
                $largest = $matrix[$i][$j];
                $largestRowAbove = $i;
                $largestColAbove = $j;
            }
        }
    }

    $tmp = $matrix[$largestRowAbove][$largestColAbove];
    $matrix[$largestRowAbove][$largestColAbove] = $matrix[$largestRowBelow][$largestColBelow];
    $matrix[$largestRowBelow][$largestColBelow] = $tmp;

    return $matrix;
}

$matrix = [
    [1, 2, 3],
    [2, 3, 1],
    [1, 2, 3],
];

print_r(replaceLargestElementsInTriangles($matrix));
/**
 * 1 2 2
 * 2 3 1
 * 1 3 3
 */
