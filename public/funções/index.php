<?php

function somar(int $n1, int $n2, int &$total)
{
    $total = $n1 + $n2;
}

$x = 2;
$y = 3;
$soma = 0;
somar($x, $y, $soma);

echo "{$x} + {$y} = {$soma}" . PHP_EOL;

$lista = [4, 9, 3];

sort($lista);

print_r($lista);
