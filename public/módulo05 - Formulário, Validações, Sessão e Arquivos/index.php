<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo 05</title>
</head>
<body style="background: white;">
    <?php include 'header.php'; ?>

    <form method="POST" action="data.php">
        <input type="text" name="name" placeholder="Informe seu nome">
        <input type="email" name="email" placeholder="Informe seu e-mail">
        <input type="number" name="age" placeholder="Informe sua idade">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>