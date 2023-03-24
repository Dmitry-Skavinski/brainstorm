<?php
function sortDesc(array $array): array
{
    for($i = 0; $i < count($array); $i++) {
        $minElement = $array[0];
        $minIndex = 0;
        $lastIndex = count($array) - $i - 1;
        for ($j = 0; $j <= $lastIndex; $j++) {
            if ($array[$j] < $minElement) {
                $minElement = $array[$j];
                $minIndex = $j;
            }
        }

        $tmp = $array[$lastIndex];
        $array[$lastIndex] = $minElement;
        $array[$minIndex] = $tmp;
    }

    return $array;
}

function sortAndInsertToEachRow(array $matrix, $valueToInsert): array
{
    for ($i = 0; $i < count($matrix); $i++) {
        $matrix[$i][] = $valueToInsert;
        $matrix[$i] = sortDesc($matrix[$i]);
    }

    return $matrix;
}
$matrix = [
    [0, 0, -1],
    [3, 2, -3],
    [2, 2, -2],
];

print_r(sortAndInsertToEachRow($matrix, 1));
