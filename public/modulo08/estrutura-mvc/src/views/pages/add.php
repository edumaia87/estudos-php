<?php $render('header'); ?>

<h2>Adicionar novo usuário</h2>

<form method="POST" action="<?=$base;?>/novo">
    <label for="name">
        Nome:<br/>
        <input type="text" name="name" placeholder="Digite seu nome">
    </label><br/><br/>
    <label for="email">
        E-mail:<br/>
        <input type="email" name="email" placeholder="Digite seu E-mail">
    </label><br/><br/>
    <input type="submit" value="Adicionar">
</form>

<?php $render('footer'); ?>