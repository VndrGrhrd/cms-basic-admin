# CMS Básico com Login para PHP
Sistema básico de CMS para administrar o Back de um site em PHP, utilizando composer.

o projeto incorpora o básico para implementar um painel administrador para um site em php contendo

>Sistema de autenticação
>Criação de usuários
>Edição de usuários
>Permissões de usuários

Não contem as  páginas para edição e controle de conteúdo do site, pois estas são voláteis de projeto para projeto.
para incorporar e restringir o acesso para usuários basta adicionar o `require __DIR__ . 'head.php';`
Para adicionar painel de ADM do site basta adicionar todo o projeto em uma pasta separada dos arquivos de front do site,  exemplo:

![enter image description here](http://studies.vandoir.com.br/img-projeto.png)


o conteúdo do painel ADM será toda a pasta  **admin**

