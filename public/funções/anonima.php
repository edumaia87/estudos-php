<?php

$dizimo = function (float $valor) {
    return $valor * 0.1;
};

$funcao = $dizimo;

echo $funcao(40) . PHP_EOL;
