<?php

class Combinatorics
{
    private int $length;
    private string $source;

    public function __construct(string $source, int $outputLength)
    {
        if (strlen($source) < $outputLength) {
            throw new Exception("source string is too short");
        }
        $this->source = $source;
        $this->length = $outputLength;
    }

    public function factorial(int $number): int
    {
        if ($number < 0) {
            throw new Exception("there is no factorial for negative numbers");
        }

        return $number ? $number * $this->factorial($number - 1) : 1;
    }

    public function countCombinations(): int
    {
        $sourceLength = strlen($this->source);
        return $this->factorial($sourceLength) / $this->factorial($sourceLength - $this->length); 
    }

    protected function combine(array $combinations = [], int $size = 0): array
    {
        $chars = str_split($this->source);

        if (empty($combinations)) {
            $combinations = $chars;
            $size = $this->length;
        }
        
        if ($size === 1) {
            return $combinations;
        }

        $newCombinations = [];

        for ($i = 0; $i < count($combinations); $i++) {
            for ($j = 0; $j < count($chars); $j++) {
                if (strpos($combinations[$i], $chars[$j]) === false) {
                    $newCombinations[] = $combinations[$i] . $chars[$j];
                }
            }
        }

        return $this->combine($newCombinations, $size - 1);
    }

    public function getCombinations()
    {
        $combinations = $this->combine();
        for ($i = 0; $i < count($combinations); $i++) {
            echo $combinations[$i] . PHP_EOL;
        }
    }

}

$comb = new Combinatorics("abc", 2);
$comb->getCombinations();