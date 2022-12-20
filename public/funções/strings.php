<?php

$nomeSujo = '   Eduardo   ';
$nomeLimpo = trim($nomeSujo) . PHP_EOL;

echo 'Nome sujo:' . strlen($nomeSujo) . PHP_EOL;
echo 'Nome limpo:' . strlen($nomeLimpo) . PHP_EOL;

$fullName = 'eduardo maia';

echo strtolower($fullName) . PHP_EOL;
echo strtoupper($fullName) . PHP_EOL;

$replacedName = str_replace('Maia', 'Valério', $fullName);

echo 'Nome alterado: ' . $replacedName . PHP_EOL;

$firstName = substr($fullName, 0, 7);
echo 'Nome: ' . $firstName . PHP_EOL;

$posicao = strpos($fullName, 'z');
if($posicao > -1) {
    echo "Achou" . PHP_EOL;
} else {
    echo "Não achou" . PHP_EOL;
}

echo 'Primeira letra maiúscula: ' . ucfirst($fullName) . PHP_EOL; //Só põe a primeira letra maiúscula
echo 'Primeira letra de cada palavra: ' . ucwords($fullName) . PHP_EOL; //Põe a primeira letra de cada palavra maiúscula