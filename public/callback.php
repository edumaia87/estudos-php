<?php

// function teste($name)
// {
//     return "Olá meu nome é {$name}";
// }

// function teste2($callback)
// {
//     if(is_callable($callback)) {
//         return $callback('Eduardo');
//     }

//     return 'Isso não é um callback';
// }

// $user = 'teste';
// echo teste2($user).PHP_EOL;

// function teste($name) 
// {
//     return "Olá meu nome é {$name}";
// }

// echo call_user_func('teste', 'Eduardo').PHP_EOL;

class User
{
    public static function metodo($name, $age)
    {
        return "Olá, o meu nome é {$name} e tenho {$age} anos.";
    }
}

// $user = new User; Se eu estiver usando método estático não precisa instanciar a classe.

echo call_user_func(['User', 'metodo'], 'Eduardo', 22).PHP_EOL; //Nesse caso eu passo o nome da classe como uma string.

