<?php
function replaceMinMaxColumns(array $matrix): array
{
    $minValue = $matrix[0][0];
    $maxValue = $matrix[0][0];
    $minColumn = 0;
    $maxColumn = 0;
    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            if ($matrix[$i][$j] > $maxValue) {
                $maxColumn = $j;
                $maxValue = $matrix[$i][$j];
            }

            if ($matrix[$i][$j] < $minValue) {
                $minColumn = $j;
                $minValue = $matrix[$i][$j];
            }
        }
    }

    for ($i = 0; $i < count($matrix); $i++) {
        $tmp = $matrix[$i][$minColumn];
        $matrix[$i][$minColumn] = $matrix[$i][$maxColumn];
        $matrix[$i][$maxColumn] = $tmp;
    }

    return $matrix;
}
$matrix = [
    [2, 2, -2],
    [3, 2, 3],
    [15, 111, 2],
];

print_r(replaceMinMaxColumns($matrix));
/**
 * 2 -2 2
 * 3 3 2
 * 15 2 111
 */