<?php
function sortByLargesInRow(array $matrix): array
{
    $max = [];
    for ($i = 0; $i < count($matrix); $i++) {
        $maxInRow = PHP_FLOAT_MIN;
        for ($j = 1; $j < count($matrix[$i]); $j++) {
            if ($matrix[$i][$j] > $maxInRow) {
                $maxInRow = $matrix[$i][$j];
            }
        }
        
        $max[$i] = $maxInRow;
    }

    $newMatrix = [];
    for ($i = 0; $i < count($matrix); $i++) {
        $largest = PHP_FLOAT_MIN;
        $row = 0;
        for ($j = 0; $j < count($max); $j++) {
            if ($max[$j] > $largest) {
                $largest = $max[$j];
                $row = $j;
            }
        }

        $newMatrix[$i] = $matrix[$row];
        $max[$row] = PHP_FLOAT_MIN;
    }
    return $newMatrix;
}
$matrix = [
    [0, 0, 0],
    [3, 2, 3],
    [2, 2, -2],
    [0, 0, 0],
    [15, 111, 2],
];

print_r(sortByLargesInRow($matrix));
