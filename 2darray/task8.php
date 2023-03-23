<?php
function removeEvenPositiveBetweenMax(array $matrix): array
{
    for ($i = 0; $i < count($matrix); $i++) {
        $maxInRow = $matrix[$i][0];
        $lastMaxPosition = 0;
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            if ($matrix[$i][$j] >= $maxInRow) {
                $lastMaxPosition = $j;
                $maxInRow = $matrix[$i][$j];
            }
        }

        for ($j = 0; $j < count($matrix[$i]); $j++) {
            if ($matrix[$i][$j] === $maxInRow) {
                $firstMaxPosition = $j;
                break;
            }
        }
        for ($j = $firstMaxPosition + 1; $j < $lastMaxPosition; $j++) {
            if ($matrix[$i][$j] > 0 && !($matrix[$i][$j] % 2)) {
                unset($matrix[$i][$j]);
            }
        }
        echo "\t";
    }
    return $matrix;
}

$matrix = [
    [3, 2, 2, 3, 1, 2, 0],
    [3, 2, 3, 4,  -2, 2, 4],
    [1, 2, 5, -2, 1, 4, 5],
];

print_r(removeEvenPositiveBetweenMax($matrix));
/**
 * 3 3 1 2 0
 * 3 2 3 4 -2 4
 * 1 2 5 -2 1 5
 */
