<?php

function teste($name)
{
    return "Olá meu nome é {$name}";
}

function teste2($callback)
{
    return call_user_func($callback, 'Eduardo');
}

echo teste2('teste') . PHP_EOL;

class User
{
    public function __invoke()
    {
        return 'Testando';
    }
}

$user = new User;

function testando($callback)
{
    return $callback();
}

echo testando($user).PHP_EOL;

function info($name, $age)
{
    return "Olá, meu nome é {$name} e tenho {$age} anos!";
}

echo call_user_func_array('info', ['Eduardo', 22]) . PHP_EOL;

$book = function ($title) {
    return "livro {$title}";
};

function book($callback)
{
    return call_user_func($callback, 'Python Fluente');
    // return call_user_func_array($callback, ['Python Fluente']);
}

echo book($book) . PHP_EOL;