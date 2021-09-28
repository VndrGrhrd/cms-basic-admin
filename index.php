<?php
require __DIR__ . '/head.php' ?>

<h1>Teste de admin login</h1>

<a href="http://localhost/admin:composer/reset_password.php?selector=<?php echo \urlencode($selector) ?>&token=<?php echo \urlencode($token) ?>"> Resetar senha</a>

<?php require __DIR__ . '/footer.php' ?>

<!-- https://vinteum.com/enviando-email-com-ajax-php-smtp/ -->