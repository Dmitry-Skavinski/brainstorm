<?php
function sortInSpecificOrder(array $array, array $order): array
{
    $sorted = [];
    for ($i = 0; $i < count($order); $i++) {
        $valueCount = 0;
        for ($j = 0; $j < count($array); $j++) {
            if ($array[$j] === $order[$i]) {
                $valueCount++;
            }
        }

        for ($j = 0; $j < $valueCount; $j++) {
            $sorted[] = $order[$i];
        }
    }

    return $sorted;
}

$array = [2, 1, 0, 1, 2, 1, 1, 2];
print_r(sortInSpecificOrder($array, [0, 2, 1])); // 0 2 2 2 1 1 1 1
