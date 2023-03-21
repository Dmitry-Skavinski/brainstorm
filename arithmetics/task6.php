<?php
function greatestCommonDivider(int $bigger, int $less): int
{
    if (!($bigger % $less)) {
        return $less;
    }

    return greatestCommonDivider($less, $bigger % $less);
}

echo greatestCommonDivider(111, 18) . PHP_EOL; // must be 3
echo greatestCommonDivider(30, 12) . PHP_EOL; // must be 6