<?php
/*$a = 1;

function test()
{
    global $a;
    echo $a . PHP_EOL;
}

// test();

function staticFunction()
{
    // $a = 0; dessa forma toda vez que eu chamar vai dar 0.
    static $a = 0; //assim toda vez que eu chamar vai incrementando.
    echo $a.PHP_EOL;
    $a++;
}

for($i = 0; $i < 10; $i++)
{
    staticFunction();
}

function connection()
{
    $pdo = new PDO('mysql:host=localhost;dbname=books', 'root', '');
    return $pdo;
}

function getData($table)
{
    $connection = connection();
    $query = $connection->query("SELECT * FROM {$table}");
    $query->execute();

    return $query->fetchAll();
}

var_dump(getData('users'));*/

$person = function ($name) {
    return $name;
};

// var_dump($person('Eduardo'));

function teste($name)
{
    $person = function () use($name) {
        return $name;
    };

    return $person;
}

var_dump(teste('Eduardo')());