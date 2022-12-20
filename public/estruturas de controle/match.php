<?php

/*$food = 'teste';

$return = match ($food) {
    'bolo' => 'Isso é um bolo',
    'arroz' => 'Isso é um arroz',
    default => 'Não é comida'
};

var_dump($return);

$x = 5;

try {
    $result = match ($x) {
        1, 2 => 'Condição 1',
        3, 5 => 'Condição 2'
    };

    var_dump($result);
} catch (\UnhandledMatchError $ex) {
    var_dump($ex);
}*/

$age = 14;

$result = match (true) {
    $age < 18 => 'É menor de idade',
    $age >= 18 => 'É maior de idade.'
};

var_dump($result);


$phrase = 'Hello, everyone!';

$result = match (true) {
    str_contains($phrase, 'Hello') => "A frase {$phrase} está em inglês!",
    str_contains($phrase, 'Olá') => "A frase {$phrase} está em português!"
};

echo $result . PHP_EOL;