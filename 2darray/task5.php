<?php
function sumColsWithElementsDivisibleBy(array $matrix,int $p): int
{
    $sumOfCols = 0;
    for ($i = 0; $i < count($matrix[0]); $i++) {
        $isColDivisibleByP = true;
        $sumOfCol = 0;
        for ($j = 0; $j < count($matrix); $j++) {
            $sumOfCol+= $matrix[$j][$i];
            if ($matrix[$j][$i] % $p) {
                $isColDivisibleByP = false;
            }
        }

        if ($isColDivisibleByP) {
            $sumOfCols+= $sumOfCol;
        }
    }

    return $sumOfCols;
}
$matrix = [
    [5, 3, 3],
    [10, 9, 1],
    [15, 111, 2],
];

echo sumColsWithElementsDivisibleBy($matrix, 3) . PHP_EOL; // 123
echo sumColsWithElementsDivisibleBy($matrix, 5) . PHP_EOL; // 30