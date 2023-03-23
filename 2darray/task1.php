<?php
function sumMainDiagonal(array $matrix): float
{
    $sum = 0;
    for ($i = 0; $i < count($matrix); $i++) {
        $sum+= $matrix[$i][$i];
    }

    return $sum;
}

function sumBelowMainDiagonal(array $matrix): float
{
    $sum = 0;
    for ($i = 1; $i < count($matrix); $i++) {
        for ($j = 0; $j < $i; $j++) {
            $sum+= $matrix[$i][$j];
        }
    }

    return $sum;
}

function sumAboveMainDiagonal(array $matrix): float
{
    $sum = 0;
    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = count($matrix) - 1; $j > $i; $j--) {
            $sum+= $matrix[$i][$j];
        }
    }

    return $sum;
}

$matrix = [
    [1, 2, 3],
    [2, 3, 1],
    [1, 2, 3],
];

echo sumMainDiagonal($matrix) . PHP_EOL; // 7
echo sumBelowMainDiagonal($matrix) . PHP_EOL; // 5
echo sumAboveMainDiagonal($matrix) . PHP_EOL; // 6
