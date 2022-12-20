<?php

$numeros = [10, 20, 12, 0, 56, 43, 86];

/*$double = array_map(function ($item) {
    return $item * 2;
}, $numeros);

print_r($double);

array_pop($numeros); // Remove o último
print_r($numeros);

array_shift($numeros); //Remove o primeiro
print_r($numeros);*/

if (in_array(86, $numeros))
    echo 'Existe' . PHP_EOL;
else
    echo 'Não existe' . PHP_EOL;

$position = array_search(86, $numeros); //Retorna a posição do valor pesquisado no array, se existir.

echo $position . PHP_EOL;

$nomes = ['Paulo', 'Silvia', 'Luana', 'Carlos'];
asort($nomes); //Orderna em ordem crescente/alfabética mas mantendo o par de chave/valor original.
arsort($nomes); //Mesma coisa só que em ordem decrescente.

print_r($nomes);

$nome = implode(' ', $nomes); //Transforma o array em uma só string.

echo $nome . PHP_EOL;