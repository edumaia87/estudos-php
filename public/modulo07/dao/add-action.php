<?php

require 'config.php';
require 'dao/DaoUserMysql.php';

$dao_user = new DaoUserMysql($pdo);

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email) {
    if ($dao_user->findByEmail($email) === false) {
        $new_user = new User();
        $new_user->setName($name);
        $new_user->setEmail($email);

        $dao_user->add($new_user);

        header('Location: index.php');
        exit;
    } else {
        header('Location: add.php');
        exit;
    }
} else {
    header('Location: add.php');
    exit;
}
