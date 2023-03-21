<?php
function containsOnlyDigits(int $n,array $digits = [0, 2, 3, 7]): bool
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

                if ($digitCount > 1) {
                    return false;
                }
            }
        }
        
        if (!$isDigitFound) {
            return false;
        }
    }
    return true;
}

for ($i = 1000; $i < 10000; $i+=2) {
    if (containsOnlyDigits($i)) {
        echo $i . PHP_EOL;
    }
}
