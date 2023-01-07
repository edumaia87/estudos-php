<?php
require 'config.php';
require 'dao/DaoUserMysql.php';

$dao_user = new DaoUserMysql($pdo);

$user = false;
$id = filter_input(INPUT_GET, 'id');
if ($id) {
    $user = $dao_user->findById($id);
}

if ($user === false) {
    header('Location: index.php');
    exit;
}
?>
<h1>Editar usuário</h1>
<form method="POST" action="edit-action.php">
    <input type="hidden" name="id" value="<?=$user->getId();?>">
    <label for="name">
        Nome:
        <input type="text" name="name" value="<?=$user->getName();?>">
    </label><br><br>
    <label for="email">
        Email:
        <input type="text" name="email" value="<?=$user->getEmail();?>">
    </label><br><br>

    <input type="submit" value="Salvar">
    <a href="index.php">Voltar</a>
</form>