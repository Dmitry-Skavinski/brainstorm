<?php
function mergeSortedArrays(array $a, array $b): array
{
    $mergedArray = [];
    for ($i = 0; $i < count($a) + count($b); $i++) {
        if (current($a) && (current($a) < current($b) || !current($b))) {
            $mergedArray[] = current($a);
            next($a);
        }

        if (current($b) && (current($a) >= current($b) || !current($a))) {
            $mergedArray[] = current($b);
            next($b);
        } 
    }

    return $mergedArray;
}

$a = [1, 3, 9, 15];

$b = [2, 4, 5, 6, 23];

print_r(mergeSortedArrays($a, $b)); // 1 2 3 4 5 6 9 15 23
