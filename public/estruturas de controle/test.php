<?php

/**
 * @param Integer $n
 * @return String[]
 */
function fizzBuzz($n): array
{
    $arr = [];
    for ($i = 1; $i <= $n; $i++) {
        $result = match (true) {
            $i % 15 == 0 => $arr[$i] = 'FizzBuzz',
            $i % 3 == 0 => $arr[$i] = 'Fizz',
            $i % 5 == 0 => $arr[$i] = 'Buzz',
            default => $arr[$i] = "$i"
        };
    }

    return $arr;
}

$test = fizzBuzz(15);

var_dump($test);
