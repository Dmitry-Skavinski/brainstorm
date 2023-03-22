<?php
function countElementsBeforeNegative(array $array): float
{
    $count = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < 0) {
            return $count;
        }

        $count++;
    }

    return $count;
}

function sumOddElementsAfterLastNegative(array $array): float
{
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < 0) {
            $lastNegativeIndex = $i;
        }
    }

    $sum = 0;
    for ($i = $lastNegativeIndex + 1; $i < count($array); $i++) {
        if ($array[$i] % 2) {
            $sum+=$array[$i];
        }
    }

    return $sum;
}

$array = [1, 3, 9, 15, -4, -900, 1000, -3, 1, 2, 3];

echo countElementsBeforeNegative($array) . PHP_EOL; // 4
echo sumOddElementsAfterLastNegative($array) . PHP_EOL; // 4
