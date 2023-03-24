<?php
function insertColumnAfterZero(array $matrix, array $column): array
{
    $columnWithLastZero = count($matrix[0]) - 1;
    for ($i = 0; $i < count($matrix[0]); $i++) {
        for ($j = 0; $j < count($matrix); $j++) {
            if ($matrix[$j][$i] === 0) {
                $columnWithLastZero = $i;
            }
        }
    }

    $newMatrix = [];
    $shift = 0;
    for ($i = 0; $i <= count($matrix[0]); $i++) {
        if ($i === $columnWithLastZero) {
            for ($j = 0; $j < count($column); $j++) {
                $newMatrix[$j][$i] = $column[$j];
            }
            
            $shift++;
            continue;
        }

        for ($j = 0; $j < count($matrix); $j++) {
            $newMatrix[$j][$i] = $matrix[$j][$i - $shift];
        }
    }

    return $newMatrix;
}

$matrix = [
    [1, 2, 3],
    [3, 0, 3],
    [1, 2, 15],
];

print_r(insertColumnAfterZero($matrix, [1, 2, 3]));
