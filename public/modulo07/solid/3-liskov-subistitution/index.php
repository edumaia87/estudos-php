<?php

class A
{
    public function getName()
    {
        return "Meu nome é A";
    }
}

class B extends A
{
    public function getName()
    {
        //Estou modificando o método mas mantenho a essência da classe extendida.
        return "Meu nome é B";

        //nesse caso violaria o principio pois eu estaria modificando o funcionamento da função
        //que implementa esse método.
        // return 30; O normal é retornar uma string.
    }
}

function printName(A $a)
{
    return $a->getName();
}

$obj1 = new A();
$obj2 = new B();
echo printName($obj1) . '<br>';
echo printName($obj2);
