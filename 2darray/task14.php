<?php
function replaceMostAlternatingRow(array $matrix): array
{
    $maxAlternates = 0;
    $maxAlternatesRow = 0;
    for ($i = 0; $i < count($matrix); $i++) {
        $alternatingNumbers = 0;
        for ($j = 1; $j < count($matrix[$i]); $j++) {
            if (
                $matrix[$i][$j] > 0 && $matrix[$i][$j - 1] < 0 ||
                $matrix[$i][$j] < 0 && $matrix[$i][$j - 1] > 0) {
                    $alternatingNumbers++;
            }
        }

        if ($alternatingNumbers >= $maxAlternates) {
            $maxAlternates = $alternatingNumbers;
            $maxAlternatesRow = $i;
        }
    }

    $tmp = $matrix[0];
    $matrix[0] = $matrix[$maxAlternatesRow];
    $matrix[$maxAlternatesRow] = $tmp;
    return $matrix;
}
$matrix = [
    [0, 0, 0],
    [3, 2, 3],
    [2, 2, -2],
    [0, 0, 0],
    [15, 111, 2],
];

print_r(replaceMostAlternatingRow($matrix));
