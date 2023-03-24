<?php
function replaceColumnWithLeastOddNumbers(array $matrix): array
{
    $minOddNumbers = PHP_INT_MAX;
    for ($i = 0; $i < count($matrix[0]); $i++) {
        $oddNumbers = 0;
        for ($j = 0; $j < count($matrix); $j++) {
            if ($matrix[$j][$i] % 2) {
                $oddNumbers++;
            }
        }

        if ($oddNumbers < $minOddNumbers) {
            $minOddNumbers = $oddNumbers;
            $minOddNumbersColumn = $i;
        }
    }

    for ($i = 0; $i < count($matrix); $i++) {
        $tmp = $matrix[$i][$minOddNumbersColumn];
        $matrix[$i][$minOddNumbersColumn] = $matrix[$i][count($matrix[$i]) - 1];
        $matrix[$i][count($matrix[$i]) - 1] = $tmp;
    }

    return $matrix;
}
$matrix = [
    [2, 2, -2],
    [3, 2, 3],
    [15, 111, 1],
];

print_r(replaceColumnWithLeastOddNumbers($matrix));
