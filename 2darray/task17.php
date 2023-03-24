<?php
function sortyByMultiplicity(array $matrix, int $divider): array
{
    $multiples = [];
    for ($i = 0; $i < count($matrix); $i++) {
        $multiplesOfRow = [];
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            if (!($matrix[$i][$j] % $divider)) {
                $multiplesOfRow[] = $matrix[$i][$j];
                $matrix[$i][$j] = "multiple";
            }
        }

        $multiples[$i] = $multiplesOfRow;
    }

    $newMatrix = [];
    for ($i = 0; $i < count($matrix); $i++) {
        $row = [];
        for ($j = 0; $j < count($multiples[$i]); $j++) {
            $min = PHP_FLOAT_MAX;
            for ($k = 0; $k < count($multiples[$i]); $k++) {
                if ($multiples[$i][$k] <= $min) {
                    $min = $multiples[$i][$k];
                    $minIndex = $k;
                }
            }

            $row[] = $min;
            $multiples[$i][$minIndex] = PHP_FLOAT_MAX;
        }

        for ($j = 0; $j < count($matrix[$i]); $j++) {
            if ($matrix[$i][$j] !== "multiple") {
                $row[] = $matrix[$i][$j];
            }
        }
        $newMatrix[$i] = $row;
    }
    return $newMatrix;
}
$matrix = [
    [0, 0, 0],
    [3, 2, 3],
    [2, 2, -2],
    [0, 0, 0],
    [115, 111, 2],
];

print_r(sortyByMultiplicity($matrix, 2));
