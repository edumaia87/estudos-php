<?php

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$names = file_get_contents('names.txt');
$names .= "\n{$name}";
if ($name) {
    file_put_contents('names.txt', $names);
    header('Location:index.php');
}
