<?php
require 'config.php';
require 'dao/DaoUserMysql.php';

$dao_user = new DaoUserMysql($pdo);
$list = $dao_user->findAll();

?>

<a href="add.php">ADICIONAR USUÁRIO</a>

<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>EMAIL</td>
        <td>AÇÕES</td>
    </tr>
    <?php foreach($list as $user): ?>
        <tr>
            <td><?=$user->getId()?></td>
            <td><?=$user->getName()?></td>
            <td><?=$user->getEmail()?></td>
            <td>
                <a href="edit.php?id=<?= $user->getId();?>">[ Atualizar ]</a>
                <a href="delete.php?id=<?= $user->getId();?>" onclick="confirm('Deseja realmente deletar este usuario?')">[ Excluir ]</a>
            </td>
        </tr>
    <?php endforeach;?>
</table>
