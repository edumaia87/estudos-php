<?php

require 'config.php';
require 'dao/DaoUserMysql.php';

$dao_user = new DaoUserMysql($pdo);

$id = filter_input(INPUT_GET, 'id');
if ($id) {
    $dao_user->delete($id);
}

header('Location: index.php');
exit;
