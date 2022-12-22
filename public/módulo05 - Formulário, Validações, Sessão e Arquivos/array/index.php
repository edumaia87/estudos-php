<?php

/*$days = range(1, 30); //para sequencias quando não se sabe o tamanho.

foreach ($days as $item) {
    echo $item . '<br>';
}*/

$array = [
    'nome' => 'Eduardo',
    'idade' => 22,
    'empresa' => 'Nubank',
    'cor' => 'Preto',
    'profissao' => 'Sigma'
];

/*if (key_exists('idade', $array)) { // Para saber se a chave existe no array.
    $age = $array['idade'];
    echo "Idade: {$age} anos.";
} else {
    echo 'Não tem idade';
}

$keys = array_keys($array); // Pega as chaves e gera um array novo com elas.
$values = array_values($array); // Mesma coisa, só com o valores

echo '<pre>';
print_r($keys);
print_r($values);*/
$keys = array_keys($array);
$values = array_values($array);
?>
<!-- <table border="1">
<?php foreach ($array as $key => $value): ?>
    <tr>
        <td><?= $key;?></td>
        <td><?= $value; ?></td>
    </tr>
<?php endforeach;?>
</table> -->


<table border="2">
    <tr>
        <?php foreach ($keys as $k): ?>
            <th><?= $key;?></th>
        <?php endforeach;?>
    </tr>
    <tr>
        <?php foreach ($values as $v): ?>
            <td><?= $v;?></td>
        <?php endforeach;?>
    </tr>
</table>
