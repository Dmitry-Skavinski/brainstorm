<?php
function insertToSorted(array $array, array $elementsToInsert): array
{
    for ($i = 0; $i < count($elementsToInsert); $i++) {
        $index = count($elementsToInsert);
        for ($j = 0; $j < count($elementsToInsert); $j++) {
            if ($array[$j] >= $elementsToInsert[$i] && $j < $index) {
                $index = $j;
            }
        }

        for ($j = count($array); $j >= $index; $j--) {
            $array[$j] = $array[$j - 1];
        }
        $array[$index] = $elementsToInsert[$i];
    }
    return $array;
}

$array = [1, 3, 9, 15];
print_r(insertToSorted($array, [2, 4, 3])); // 1 2 3 3 4 9 15
