<?php

/*$text = file_get_contents('arq.txt');

$text = explode("\n", $text);
echo 'Linhas: ' . count($text) .'</br>';

print_r($text);*/

$text = file_get_contents('arq.txt');

$text .= "\nEduardo Maia";

file_put_contents('arq.txt', $text);
echo 'Arquivo atualizado com sucesso!';

// unlink(); Para deletar arquivos
// rename(); Para renomear e mover arquivos
// copy(); Para copiar arquivos
