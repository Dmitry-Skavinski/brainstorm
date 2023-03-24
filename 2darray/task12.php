<?php
function isPrime(int $number): bool
{
    for ($i = 2; $i < $number; $i++) {
        if (!($number % $i)) {
            return false;
        }
    }

    return true;
}

function isElementPresent(array $haystack, $needle): bool
{
    $from = 0;
    $to = count($haystack);
    $currentIndex = 0;
    while ($to - $from > 1) {
        if ($haystack[$currentIndex] === $needle) {
            return true;
        }
        if ($haystack[$currentIndex] > $needle) {
            $from = $currentIndex + 1;
        } else {
            $to = $currentIndex;
        }

        $currentIndex = (int) ($to - $from) / 2;
    }

    return $haystack[$from] === $needle;
}

function removePrimeColumns(array $matrix): array
{
    $columnsToRemove = [];
    for ($i = 0; $i < count($matrix[0]); $i++) {
        $areAllNumbersPrime = true;
        for ($j = 0; $j < count($matrix); $j++) {
            if (!isPrime($matrix[$j][$i])) {
                $areAllNumbersPrime = false;
                break;
            }
        }

        if ($areAllNumbersPrime) {
            $columnsToRemove[] = $i;
        }
    }
    $newMatrix = [];
    $originalColumn = 0;
    for ($i = 0; $i < count($matrix[0]) - count($columnsToRemove); $i++) {
        if (isElementPresent($columnsToRemove, $i)) {
            $originalColumn++;
        }
        for ($j = 0; $j < count($matrix); $j++) {
            $newMatrix[$j][$i] = $matrix[$j][$originalColumn];
        }
        $originalColumn++;
    }

    return $newMatrix;
}

$matrix = [
    [1, 2, 3],
    [3, 4, 3],
    [1, 2, 15],
];

print_r(removePrimeColumns($matrix));
