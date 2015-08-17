<section>
    <!-- carrousel -->
    <div class="row">
        <div class="bloco">

            <div id="fullcarousel-example" data-interval="4000" class="carousel slide"
                 data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#fullcarousel-example" data-slide-to="0" class="active"></li>
                    <li data-target="#fullcarousel-example" data-slide-to="1"></li>
                    <li data-target="#fullcarousel-example" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-md-8">
                                <img src="<?= HOME . '/themes/' . THEME ?>/images/post/entrega-diploma.jpg" class="img-responsive">
                            </div>

                            <header>
                                <h2><a href="#">CERIMÔNIA DE ENTREGA DE DIPLOMAS</a></h2>
                                <h3>CURSO DE DEFESA DOS DIREITOS HUMANOS, REALIZADO PELA CIDDHC-ES NA CIDADE DE SÃO GABRIEL DA PALHA</h3>
                                <time datetime="2015-06-27" pubdate="">27/06/2015</time>
                            </header>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-md-8">
                                <img src="<?= HOME . '/themes/' . THEME ?>/images/post/entrega-diploma2.jpg" class="img-responsive">
                            </div>

                            <header>
                                <h2><a href="#">Comissão Interestadual de Defesa dos Direitos Humanos e Cidadania</a></h2>
                                <time datetime="2015-06-27" pubdate="">27/06/2015</time>
                            </header>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-md-8">
                                <img src="<?= HOME . '/themes/' . THEME ?>/images/post/maria-da-penha.jpg"  class="img-responsive">
                            </div>

                            <header>
                                <h2><a href="#">Lei Maria da Penha</a></h2>
                                <h3>Juizado Itinerante da Lei Maria da Penha vai atender às mulheres vítimas de violência doméstica de Baixo Guandu</h3>
                                <p>De hoje até sexta-feira, o Juizado Itinerante da Lei Maria da Penha vai atender às mulheres vítimas de violência doméstica de Baixo Guandu, no noroeste do Estado. No ônibus, onde funciona o juizado, podem ser feitos Boletins de Ocorrência (BO), assistência jurídica...</p>
                                <time datetime="2015-02-02" pubdate="">02/06/2015</time>
                            </header>
                        </div>
                    </div>

                </div>
                <a class="left carousel-control" href="#fullcarousel-example" data-slide="prev"><i class="icon-prev fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#fullcarousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    <!-- carrousel -->

    <div class="row">
        <!--columa esquerda-->
        <?php
        //coluna esquerda
        require(REQUIRE_PATH . '/inc/colum.left.inc.php');

        //coluna direita
        require(REQUIRE_PATH . '/inc/colum.right.inc.php');
        ?>
    </div>
</section>