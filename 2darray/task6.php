<?php
function multiplyByFirstNotNegativeRow(array $matrix): array
{
    for ($i = 0; $i < count($matrix); $i++) {
        $containsOnlyNotNegative = true;
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            if ($matrix[$i][$j] < 0) {
                $containsOnlyNotNegative = false;
                break;
            }
        }

        if (!$containsOnlyNotNegative) {
            continue;
        }

        $vector = $matrix[$i];
        $newMatrix = [];

        for ($i = 0; $i < count($matrix); $i++) {
            for ($j = 0; $j < count($matrix[$i]); $j++) {
                $newMatrix[$i][$j] = $matrix[$i][$j] * $vector[$j];
            }
        }

        return $newMatrix;
    }

    return $matrix;
}
$matrix = [
    [2, 2, -2],
    [3, 2, 3],
    [15, 111, 2],
];

print_r(multiplyByFirstNotNegativeRow($matrix));
/**
 * 6 4 -6
 * 9 4 9
 * 45 222 6
 */
