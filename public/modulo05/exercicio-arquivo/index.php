<form action="addName.php" method="POST">
    <label for="name">Nome: </label>
    <input type="text" name="name" placeholder="Informe um nome">
    <input type="submit" value="Enviar">
</form>


<?php
$names = file_get_contents('names.txt');
$names = explode('\\', $names);

echo '<ul>';
foreach ($names as $item) {
    echo '<li>' . $item . '</li>';
}
echo'</ul>';
?>
