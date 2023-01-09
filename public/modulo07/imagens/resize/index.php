<?php

// $image = imagecreatetruecolor(500, 500); // cria a imagem passando largura e altura
// $color = imagecolorallocate($image, 255, 127, 32); // aqui é pra definir uma cor pra imagem usando RGB

// imagefill($image, 0, 0, $color); Aqui ta preenchendo a imagem com a cor criada em cima

// imagepng($image, 'image.png'); Gera uma imagem do tipo PNG
// imagejpeg($image, 'image.jpg', 100); Gera uma imagem do tipo JPEG (dá pra informar a qualidade)

$arquivo = 'anime-wallpaper.jpg';
$max_width = 500;
$max_height = 250;

list($original_width, $original_height) = getimagesize($arquivo);

$ratio = $original_width / $original_height;
$ratio_dest = $max_width / $max_height;

$final_width = 0;
$final_height = 0;

if ($ratio_dest > $ratio) {
    $final_width = $max_height * $ratio;
    $final_height = $max_height;
} else {
    $final_height = $max_width / $ratio;
    $final_width = $max_width;
}

// echo "{$final_width} - {$final_height}";

$image = imagecreatetruecolor($final_width, $final_height);
$original_img = imagecreatefromjpeg($arquivo);

imagecopyresampled(
    $image,
    $original_img,
    0,
    0,
    0,
    0,
    $final_width,
    $final_height,
    $original_width,
    $original_height
);

imagejpeg($image, 'novo-wallpaper.jpg', 100);
