<?php

function distance(string $strandA, string $strandB): int
{
    if (strlen($strandA) !== strlen($strandB)) {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }
    $strandA_arr = str_split($strandA);
    $strandB_arr = str_split($strandB);
    $count = 0;
    for ($i = 0; $i < strlen($strandA); $i++) {
        if ($strandA_arr[$i] != $strandB_arr[$i]) {
            $count += 1;
        }
    }
    return $count;
}
