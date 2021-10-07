<?php
require __DIR__ . '/head.php'
?>
<title>Painel Adminsitrativo Basic CMS  </title>
<main id="body">
    <header id="header-nav">
        <?php require 'components/layout/header-nav.php' ?>
    </header>
    <nav>
        <section id="menu-nav">
            <div id="menu-section">
                <?php require 'components/layout/menu.nav.php' ?>
            </div>
        </section>
        <section id="content-nav">
            <div id="content-page">
                <h1>Bem Vindo ao Painel de Administração</h1>
            </div>
        </section>
    </nav>
    <footer id="footer-nav">
        <p id="footer-info">Painel Adminsitrativo Basic CMS </p>
    </footer>
</main>
<?php require __DIR__ . '/footer.php' ?>
<!-- https://vinteum.com/enviando-email-com-ajax-php-smtp/ -->