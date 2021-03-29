<!-- NOTICIAS QUE APARECE NA HOME -->

<?php
//STARTANDO O CONTOLLER
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= '/controler/noticias.php';
include "$path";

//Trazer todas as noticias
$ativos = ativos()->fetch_assoc();
$noticias = noticias();
?>

<div class="mb-5 mx-3">
    <div class="row">
        <h3 class="px-4">Notícias</h3>
    </div>

    <div class="row justify-content-center">
        <div class="bg-dark p-1 rounded mt-4 max-size-notice w-100">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                <!-- BARRINHA NA IMAGEM -->
                <ol class="carousel-indicators">
                    <?php for ($i = 0; $i < $ativos['COUNT(ativo)']; $i++) {
                        if ($i == 0) { ?>
                            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="active"></li>
                        <?php } else { ?>
                            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>"></li>
                    <?php }
                    } ?>
                </ol>

                <div class="carousel-inner">
                    <?php
                    $x = 0;
                    while ($amostra = $noticias->fetch_assoc()) {
                        if ($amostra['carrossel'] == 1 && $amostra['ativo'] == 1 && $x == 0) {
                            $x++;
                    ?>
                            <div class="carousel-item active">
                                <form action="view/noticias/noticias.php" method="POST">
                                    <button class="btn w-100" type="submit" name="id" value="<?php echo $amostra['id']; ?>">
                                        <img class="img-fluid min-size-height rounded" src="<?php echo $amostra['url_imagem']; ?>" alt="Noticia <?php echo $x; ?>">
                                        <div class="carousel-caption">
                                            <h5 class="bg-dark rounded"><?php echo $amostra['titulo']; ?></h5>
                                        </div>
                                    </button>
                                </form>
                            </div>
                        <?php
                        } elseif ($amostra['carrossel'] == 1 && $amostra['ativo'] == 1) {
                        ?>
                            <div class="carousel-item">
                                <form action="view/noticias/noticias.php" method="POST">
                                    <button class="btn w-100" type="submit" name="id" value="<?php echo $amostra['id']; ?>">
                                        <img class="img-fluid min-size-height rounded" src="<?php echo $amostra['url_imagem']; ?>" alt="Noticia <?php echo $x; ?>">
                                        <div class="carousel-caption">
                                            <h5 class="bg-dark rounded"><?php echo $amostra['titulo']; ?></h5>
                                        </div>
                                    </button>
                                </form>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>

                <a class="carousel-control-prev bg-pointer-left" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next bg-pointer-right" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </div>

    <div class="row pt-2 justify-content-center">
        <div class="col-fill">
            <a class="bg-dark px-2 rounded text-white align-self-between" href="/view/noticias">Ver notícias antigas...</a>
        </div>
    </div>

</div>