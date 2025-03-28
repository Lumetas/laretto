<?php

function countConsecutivePairs(array $arr): int
{
    $count = 0;
    for ($i = 0; $i < count($arr) - 1; $i++) {
        if ($arr[$i] === $arr[$i + 1]) {
            $count++;
        }
    }
    return $count;
}

$array = [1, 1, 2, 3, 4, -51, 12, 12, 12, -51];
echo countConsecutivePairs($array);
