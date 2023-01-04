<?php

session_start();

$_SESSION['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

if (isset($_SESSION['name'])) {
    echo "Olá, {$_SESSION['name']}!";
} else {
    header('Location:login.php');
}
?>
<a href="login.php">Sair</a>