<?php
// require __DIR__ . '/head.php' 
?>


<H1>CRIAR NOVO USUÁRIO</H1>
<hr><br>
<form action="source/auth/Add_user.php" method="post">
    <div>
        <label>Nome do usuario *
            <input type="text" name="usuario" id="usuario">
        </label>

    </div>
    <div>
        <label>Email do usuario *
            <input type="email" name="email" id="email">
        </label>
    </div>
    <div>
        <label>Senha do usuario *
            <input type="password" name="password" id="password">
        </label>
    </div>
    <div>
        <input type="submit" value="CRIAR">
    </div>
</form>
<?php require __DIR__ . '/footer.php' ?>