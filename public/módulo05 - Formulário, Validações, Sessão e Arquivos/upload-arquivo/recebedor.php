<?php

/*echo '<pre>';
print_r($_FILES);*/
$types = ['image/jpeg', 'image/jpg', 'image/png'];

if (in_array($_FILES['file']['type'], $types)) {
    $name = md5(time() . rand(0, 100)) . '.jpg';
    move_uploaded_file($_FILES['file']['tmp_name'], 'imagens/' . $name);

    echo 'Arquivo salvo com sucesso!';
} else {
    echo 'Arquivo não permitido!';
}
