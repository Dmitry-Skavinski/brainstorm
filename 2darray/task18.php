<?php
function replaceNegativeToDiagonal(array $matrix): array
{
    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            if ($matrix[$i][$j] < 0) {
                $tmp = $matrix[$i][$i];
                $matrix[$i][$i] = $matrix[$i][$j];
                $matrix[$i][$j] = $tmp;
            }
        }
    }

    return $matrix;
}
$matrix = [
    [0, 0, -1],
    [3, 2, -3],
    [2, 2, -2],
];

print_r(replaceNegativeToDiagonal($matrix));
