<?php

$nomes = ['Eduardo', 'Alex', 'Bruna', 'Barbara', 'Julia'];

$total = count($nomes);
echo "Total de nomes: {$total}" . PHP_EOL;

$aprovados = ['Eduardo', 'Bruna'];

$reprovados = array_diff($nomes, $aprovados); //Pega a diferença entre 2 arrays

print_r($reprovados);

$numeros = [10, 23, 56, 4, 0, 89, 59, 45, 12];
$filter = array_filter($numeros, function ($item) {
    if ($item < 30)
        return true;
    else
        return false;
});

print_r($filter);
