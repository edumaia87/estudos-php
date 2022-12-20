<?php

$nomeCompleto = 'Eduardo Antônio Maia Valério';

$nomes = explode(' ', $nomeCompleto);
print_r($nomes);

$numero = 156565.8989;

echo number_format($numero, 2, ',', '.') . PHP_EOL;