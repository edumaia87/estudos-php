<?php

$dizimo = fn (int $valor) => $valor * 0.1;

$somar = fn (int $n1, int $n2) => $n1 + $n2;
echo $dizimo(982) . PHP_EOL;
echo 'Soma: ' . $somar(1, 2) . PHP_EOL;
