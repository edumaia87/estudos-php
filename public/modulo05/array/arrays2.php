<?php

/*$array = ['a', 'b', 'c', 'd', 'e', 'f'];

$slice = array_slice($array, -4, 4); // cria um novo array cortando apartir de um índice

echo '<pre>';
print_r($slice);

array_splice($array, 3, 2, ['j','k','l']); // modifica o array original removendo ou adicionando o(s) índice(s) desejado(s)
print_r($array);

echo '<p>Arrray reduce</p>';
$numbers = [1, 2, 3, 4, 5];

function somar($subtotal, $item)
{
    $subtotal += $item;
    return $subtotal;
};

$total = array_reduce($numbers, 'somar'); // Passando um array e uma função que eu criar, ele irá executar essa função em cada um o itens do array.

echo "Subtotal: {$total}" . '<br>';*/

echo '<pre>';

$students = [
    ['nome' => 'Eduardo', 'sexo' => 'M', 'nota' => 90],
    ['nome' => 'Lucas', 'sexo' => 'M', 'nota' => 70],
    ['nome' => 'Maria', 'sexo' => 'F', 'nota' => 59],
    ['nome' => 'Thais', 'sexo' => 'F', 'nota' => 72]
];

print_r($students);

function countM($subtotal, $item)
{
    if ($item['sexo'] === 'M') {
        $subtotal++;
    }

    return $subtotal;
}
$totalM = array_reduce($students, 'countM');

function sumM($subtotal, $item)
{
    if ($item['sexo'] === 'M') {
        $subtotal += $item['nota'];
    }

    return $subtotal;
}

$sum = array_reduce($students, 'sumM');

$media = $sum / $totalM;

echo "Total de homens: {$totalM}". '<br>';
echo "Soma da nota dos homens: {$sum}". '<br>';
echo "Soma da nota dos homens: {$media}" . '<br>';
?>

<a href="list.php">Desconstruindo list</a>
