<h1 style="color: black;">Cabeçalho</h1>
<?php
if (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
    echo "<h2>{$name}</h2>";
}
?>
<hr/>