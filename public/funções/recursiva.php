<?php

function dividir(float $numero)
{
    $metade = $numero / 2;
    echo $metade . PHP_EOL;

    if (round($metade) > 0) {
        dividir($metade);
    }
}

dividir(100);
