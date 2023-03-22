<?php
function countUnique(array $array): int
{
    $uniqueArray = [];
    for ($i = 0; $i < count($array); $i++) {
        $isAlreadyPresent = false;
        for ($j = 0; $j < count($uniqueArray); $j ++) {
            if ($uniqueArray[$j] === $array[$i]) {
                $isAlreadyPresent = true;
            }
        }

        if (!$isAlreadyPresent) {
            $uniqueArray[] = $array[$i];
        }
    }

    return count($uniqueArray);
}

$array = [1, 3, 9, 15, -4, -900, 1000, -3, 1, 2, 3];

echo countUnique($array); // 9
