<?php
function removeZeroRows(array $matrix): array
{
    $newMatrix = [];
    for ($i = 0; $i < count($matrix); $i++) {
        $hasOnlyZeroes = true;
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            if ($matrix[$i][$j]) {
                $hasOnlyZeroes = false;
                break;
            }
        }

        if (!$hasOnlyZeroes) {
            $newMatrix[] = $matrix[$i];
        }
    }

    return $newMatrix;
}
$matrix = [
    [2, 2, -2],
    [0, 0, 0],
    [3, 2, 3],
    [0, 0, 0],
    [15, 111, 2],
];

print_r(removeZeroRows($matrix));
/**
 * 2 -2 2
 * 3 3 2
 * 15 2 111
 */