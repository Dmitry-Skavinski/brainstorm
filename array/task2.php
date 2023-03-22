<?php
function arrayOfAvg(array $array): array
{
    $avg = [];
    for ($i = 0; $i < count($array); $i++) {
        $avg[$i] = 0;
        for ($j = 0; $j <= $i; $j++) {
            $avg[$i]+= $array[$j];
        }
        $avg[$i]/= $i + 1;
    }

    return $avg;
}

$array = [1, 3, 9, 15, -4, -900, 1000, -3, 1, 2, 3];

print_r(arrayOfAvg($array));
