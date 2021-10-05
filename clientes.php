<?php
require __DIR__ . '/head.php' 
?>
<title>Gerenciamento de Usuarios Hiper Game Badotti</title>
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
                    <img src="/image/Hiper-game-60-anos.png" alt="" style="width: 300px; display: block; margin: 0 auto;">
                </div>
                <div style="display: flex;justify-content: space-between;flex-direction: row;">
                    <div style=" flex: none;">
                        <div style="display: inline-block; margin: 0">
                            <form style="display: inline-block;" method="POST">
                                <label>Filtrar por:
                                    <select name="filtro" id="filtro">
                                        <option value="pontuacao">Pontuação</option>
                                        <option value="moedas">Moedas</option>
                                        <option value="etapa">Etapas</option>
                                        <option value="cpf">CPF</option>
                                        <option value="nome">Nome</option>
                                        <option value="Nickname">Nickname</option>

                                    </select>
                                    <select name="ordenar" id="ordem">
                                        <option value="DESC">Decrecente</option>
                                        <option value="ASC">Acrecente</option>

                                    </select>
                                    <input id="filtro_user" type="button" value="Filtrar">
                            </form>
                        </div>
                    </div>
                    <div style="width: 40%; flex: none;">
                        <form method="post">
                            <input type="text" name="search" placeholder="Pesquise pelo CPF do Cliente" id="search" style=" display: inline-block;  width: calc(100% - 131px);     padding-left: 10px;">
                            <input id="search-form" type="button" value="Pesquisa">
                        </form>
                    </div>
                    <div style="flex: none;">
                        <div style="display: inline-block; margin: 0">
                            <form style="display: inline-block;" action="/admin/components/exportData.php" method="post">
                                <input  type="submit" value="Exportar tabela">
                            </form>
                        </div>
                    </div>
                    
                </div>
                <div>
                    <div id="counter page">
                      <form action="post" style="display: flex; justify-content: space-between;">
                        <input type="button" value="PREV" id="prev_page">    
                        <input type="text" name="offset" id="offset" value="100" style="visibility: hidden; width: 0px; height: 0px;"> 
                        <input type="button" value="NEXT" id="next_page">
                      </form>
                    
                    </div>
                    <div>
                        <p style=" text-align: right; margin-right: 60px; color: red; font-weight: 600"> Premiação => 0 (zero) não recebeu | 1(um) recebeu</p>
                    </div>
                    <wrapper class="user-data">
                        <div class="row">
                            <div class="col">
                                <h6>id</h6>
                            </div>
                            <div class="col-2">
                                <h6>Nome</h6>
                            </div>
                            <div class="col">
                                <h6>Nickname</h6>
                            </div>
                            <div class="col-2">
                                <h6>CPF</h6>
                            </div>
                            <div class="col">
                                <h6>Pontuação</h6>
                            </div>
                            <div class="col">
                                <h6>Moedas</h6>
                            </div>
                            <div class="col">
                                <h6>Etapa</h6>
                            </div>
                            <div class="col">
                                <h6>1º Prêmio</h6>
                            </div>
                            <div class="col">
                                <h6>2º Prêmio</h6>
                            </div>
                            <div class="col">
                                <h6>Atualize</h6>
                            </div>
                        </div>
                        <div class="col" id="content_table"></div>
                    </wrapper>

                    
                </div>
                <div id="loading" class="mt-5 col-12 mx-auto">
                            <img src="/admin/image/loading-buffering.gif" alt="" style="display: block;  width: 80px; margin: 0 auto;"> 
                            <h5 style=" text-align: center; margin: 15px 0 0; font-size: 2rem;">Carregando, Aguarde...</h5>
                    </div>
            </div>
            </div>
            </div>
        </section>
    </nav>
    <footer id="footer-nav">
        <p id="footer-info">Vox Brazil Comunicações. Todos os direitos reservados</p>
    </footer>
</main>
<?php require __DIR__ . '/footer.php' ?>
<!-- https://vinteum.com/enviando-email-com-ajax-php-smtp/ -->