<?php
session_start();
require('header.php');

if ($_SESSION['aviso']) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
?>

<a href="delete.php">Apagar cookie</a>

<form method="POST" action="data.php">
    <label for="name">Nome:</label>
    <input type="text" name="name" placeholder="Informe seu nome">
    <label for="name">E-mail:</label>
    <input type="email" name="email" placeholder="Informe seu e-mail">
    <label for="name">Idade:</label>
    <input type="number" name="age" placeholder="Informe sua idade">
    <input type="submit" value="Enviar">
</form>