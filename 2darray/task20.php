<?php
function sortByFirstElement(array $array): array
{
    for($i = 0; $i < count($array); $i++) {
        $maxElementRow = $array[0];
        $maxIndex = 0;
        $lastIndex = count($array) - $i - 1;
        for ($j = 0; $j <= $lastIndex; $j++) {
            if ($array[$j][0] > $maxElementRow[0]) {
                $maxElementRow = $array[$j];
                $maxIndex = $j;
            }
        }

        $tmp = $array[$lastIndex];
        $array[$lastIndex] = $maxElementRow;
        $array[$maxIndex] = $tmp;
    }

    return $array;
}

function replaceRowWithLargestSum(array $matrix): array
{
    $index = 0;
    $maxSum = PHP_FLOAT_MIN;
    for ($i = 0; $i < count($matrix); $i++) {
        $sum = 0;
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            if ($matrix[$i][$j] > 0) {
                $sum+= $matrix[$i][$j];
            }
        }

        if ($sum > $maxSum) {
            $maxSum = $sum;
            $index = $i;
        }
    }

    $newMatrix = [$matrix[$index]];

    for ($i = 0; $i < count($matrix); $i++) {
        if ($i !== $index) {
            $newMatrix[] = $matrix[$i];
        }
    }

    return $newMatrix;
}

$matrix = [
    [5, 0, -10],
    [3, 2, -3],
    [2, 2, -2],
];

print_r(replaceRowWithLargestSum(sortByFirstElement($matrix)));
