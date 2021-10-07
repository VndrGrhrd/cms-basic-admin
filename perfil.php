<?php
// require __DIR__ . '/head.php' 
?>
<title>Atualize suas informações - CMS Basico</title>
<link rel="stylesheet" href="style/layout.css">
<link rel="stylesheet" href="style/style.css">
<main id="body">
    <header id="header-nav">
        <?php require __DIR__ . '/components/layout/header-nav.php' ?>
    </header>
    <nav>
        <section id="menu-nav">
            <div id="menu-section">
                <?php require __DIR__ . '/components/layout/menu.nav.php' ?>
            </div>
        </section>
        <section id="content-nav">
            <div id="content-page">
                <div>
                    <h1>Atualize seus dados</h1>
                </div>
                <div class="form-user">
                    <form id="form_add_user" method="post">
                        <!-- <form action="source/auth/Add_user.php" method="post"> -->
                        <div>
                            <label>
                                <p>Nome do usuario *</p>
                                <input type="text" name="usuario" id="usuario">
                            </label>

                        </div>
                        <div>
                            <label>
                                <p>Email do usuario *</p>
                                <input type="email" name="email" id="email">
                            </label>
                        </div>
                        <div>
                            <label>
                                <p>Senha do usuario *</p>
                                <input type="password" name="password" id="password">
                            </label>
                        </div>
                        <div>
                            <input id="send_add_user" type="submit" value="CRIAR">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </nav>
    <footer id="footer-nav">
        <p id="footer-info">CMS Basico para Administrar seu Site. </p>
    </footer>
</main>
<?php require __DIR__ . '/footer.php' ?>
<!-- https://vinteum.com/enviando-email-com-ajax-php-smtp/ -->