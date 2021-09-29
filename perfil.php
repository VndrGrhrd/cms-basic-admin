<?php
// require __DIR__ . '/head.php' 
?>
<title>Painel Adminsitrativo - CMS Basico</title>
<link rel="stylesheet" href="style/layout.css">
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
                <?php require __DIR__ . '/components/pages/index.php' ?>
            </div>
        </section>
    </nav>
    <footer id="footer-nav">
        <p id="footer-info">CMS Basico para Administrar seu Site. </p>
    </footer>
</main>
<script>
    window.addEventListener('load', () => {
        let title = document.getElementsByTagName('title')
        document.getElementById('page-current').innerText = title[0].innerText
    })
</script>
<?php require __DIR__ . '/footer.php' ?>
<!-- https://vinteum.com/enviando-email-com-ajax-php-smtp/ -->