<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style\login.css">
    <title>Login Admin</title>
</head>

<body>
    <div class="video">
        <video autoplay muted loop>
            <source src="image\bg-globe.mp4" type="video/mp4">
        </video>
    </div>
    <section id="content">
        <div class="container">
            <div>
                <p id="text_digit"></p>
            </div>
            <div>
                <form id="form_login" method="post">
                    <!-- <form action="source/auth/login.php" method="post"> -->
                    <div class="label">
                        <input placeholder="Digite seu email" type="email" name="email" id="email" style="display: none;">
                    </div>
                    <div class="label">
                        <input placeholder="Digite sua senha" type="password" name="password" id="password" style="display: none;">
                        </label>
                    </div>
                    <div class="label">
                        <input id="send_login" type="submit" value="ENTRAR" style="display: none;">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        // Maquina de escrever
        window.addEventListener('load', function() {
            let text = document.getElementById("text_digit")
            let texto = "Bem vindo a área de administração de seu site. Digite credenciais para entrar para acessar"
            const email = document.getElementById("email")
            const password = document.getElementById("password")
            const send_login = document.getElementById("send_login")
            texto = texto.split('')
            texto.forEach((item, i) => {
                setTimeout(function() {
                    text.innerHTML += item
                }, 75 * i)
                setTimeout(function() {
                    email.style.display = ''
                    email.focus()
                }, 7000)
            })
            email.addEventListener('focus', function() {
                setTimeout(function() {
                    password.style.display = ''
                }, 2000)
            })
            password.addEventListener('focus', function() {
                setTimeout(function() {
                    send_login.style.display = ''
                }, 2000)

            })
        })
    </script>
</body>

</html>