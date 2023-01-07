<?php

require 'config.php';
require 'dao/DaoUserMysql.php';

$dao_user = new DaoUserMysql($pdo);

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($id && $name && $email) {
    // $user = $dao_user->findById($id); Outra forma de fazer
    $user = new User();
    $user->setId($id);
    $user->setName($name);
    $user->setEmail($email);

    $dao_user->update($user);
    header('Location: index.php');
    exit;
} else {
    header('Location: edit.php?id='.$id);
    exit;
}
