<?php
function addMinInColumnAfterNegative(array $matrix): array
{
    $newMatrix = [];
    $negatives = [];
    $mins = [];
    for ($i = 0; $i < count($matrix[0]); $i++) {
        $isNegativeFound = false;
        $mins[$i] = PHP_FLOAT_MAX;
        for ($j = 0; $j < count($matrix); $j++) {
            if ($matrix[$j][$i] < 0 && !$isNegativeFound) {
                $negatives[$i] = $j;
                $isNegativeFound = true;
            }

            if ($matrix[$j][$i] < $mins[$i]) {
                $mins[$i] = $matrix[$j][$i];
            }
        }
    }

    for ($i = 0; $i <= count($matrix); $i++) {
        $newMatrix[] = [];
    }

    for ($i = 0; $i < count($matrix[0]); $i++) {
        if (isset($negatives[$i])) {
            $isNegativeInserted = false;
            for ($j = 0; $j <= count($matrix); $j++) {
                if ($j === $negatives[$i] + 1) {
                    $newMatrix[$j][$i] = $mins[$i];
                    $isNegativeInserted = true;
                } elseif ($isNegativeInserted) {
                    $newMatrix[$j][$i] = $matrix[$j -1][$i];
                } else {
                    $newMatrix[$j][$i] = $matrix[$j][$i];
                }
            }
        } else {
            $newMatrix[0][$i] = $mins[$i];
            for ($j = 1; $j <= count($matrix); $j++) {
                $newMatrix[$j][$i] = $matrix[$j - 1][$i];
            }
        }
    }

    return $newMatrix;
}

$matrix = [
    [1, 2, -5],
    [3, -2, 3],
    [1, 2, -10],
];

print_r(addMinInColumnAfterNegative($matrix));
/**
 * 1 2 -5
 * 1 -2 -10
 * 3 -2 3
 * 1 2 -10
 */
