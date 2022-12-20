<?php

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$age = filter_input(INPUT_POST, 'age');

if ($name && $email && $age) {
    $expirate = time() + (86400 * 30);
    setcookie('name', $name, $expirate);


    echo "Nome: {$name}" . '</br>';
    echo "E-mail: {$email}" . '</br>';
    echo "Idade: {$age}" . '</br>';
} else {
    header('Location: index.php');
    exit;
}
