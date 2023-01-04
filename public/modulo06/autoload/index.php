<?php

require 'autoload.php';

use \matematica\Matematica;
use \foto\Foto;

$mat = new Matematica();

echo $mat->somar(10, 20) . '<br />';

$foto = new Foto();
