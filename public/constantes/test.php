<?php

const BIT_5 = 1 << 5;    
define('BIT_6', 1 << 6);

echo BIT_5. ' '.BIT_6.PHP_EOL;

class Test
{
    const BAR = 2;
    // define('QUIX', '2'); Não é permitido declarar constante assim dentro da classe.
}