<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar novo Usuario</title>
</head>

<body>
    <H1>CRIAR NOVO USUÁRIO</H1>
    <hr><br>
    <form id="form_login" method="post">
        <!-- <form action="source/auth/login.php" method="post"> -->
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
            <input id="send_login" type="submit" value="ENTRAR">
        </div>
    </form>
</body>

</html>