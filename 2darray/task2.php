<?php
function leastAverage(array $matrix): int
{
    $index = 0;
    $leastAverage = PHP_FLOAT_MAX;
    for ($i = 0; $i < count($matrix); $i++) {
        $sum = 0;
        $count = 0;
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            if ($matrix[$i][$j] > 0) {
                $count++;
                $sum+= $matrix[$i][$j];
            }
        }

        $average = $count ? $sum / $count : 0;

        if ($average < $leastAverage) {
            $leastAverage = $average;
            $index = $i;
        }
    }

    return $index;
}

$matrix = [
    [1, 2, 3],
    [2, 3, 1],
    [1, 2, 2],
];

echo leastAverage($matrix) . PHP_EOL; // 3