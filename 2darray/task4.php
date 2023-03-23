<?php
function containsOnlySpecificDigits(int $n,array $digits = [0, 2, 3, 7]): bool
{
    $nCopy = $n;
    while ($n > 0) {
        $isDigitFound = false;
        $digit = $n % 10;
        $n = (int) ($n / 10);
        for ($i = 0; $i < count($digits); $i++) {
            if ($digit === $digits[$i]) {
                $isDigitFound = true;
                $digitCount = 0;
                $tmp = $nCopy;
                while ($tmp > 0) {
                    $tmpDigit = $tmp % 10;
                    $tmp = (int) ($tmp / 10);
                    if ($tmpDigit === $digit) {
                        $digitCount++;
                    }
                }
            }
        }
        
        if (!$isDigitFound) {
            return false;
        }
    }
    return true;
}

function sumValuesWithOnlySpecificDigits(array $matrix,array $digits): int
{
    $sum = 0;
    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            if (containsOnlySpecificDigits($matrix[$i][$j], $digits)) {
                $sum+= $matrix[$i][$j];
            }
        }
    }

    return $sum;
}

$matrix = [
    [1, 2, 3],
    [138, 3, 80],
    [4, 5, 6],
];

echo sumValuesWithOnlySpecificDigits($matrix, [0, 1, 3, 8]) . PHP_EOL; // 225
