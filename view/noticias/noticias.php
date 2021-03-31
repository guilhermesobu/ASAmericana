<?php
include '../defaultTop.php';

//STARTANDO O CONTOLLER
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= '/controler/noticias.php';
include "$path";

//Trazer todas as noticias
$noticias = noticias();
?>

<div class="p-3 mb-4 shadow rounded">
    <?php
    while ($amostra = $noticias->fetch_assoc()) {
        if ($amostra['id'] != $_POST['id']) {
            continue;
        } elseif($amostra['ativo'] == 1) {
    ?>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page"><a href="/">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="/view/noticias/">Noticias</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo traduzirDataAbreviada($amostra) . " - " . $amostra['titulo']; ?></li>
                </ol>
            </nav>

            <div class="mt-5 mx-3">

                <!-- NOTICIAS -->
                <div class="row-fluid pb-4 px-4">
                    <div class="row pb-5">
                        <div class="col-md-6 align-self-end">
                            <h5 class="text-primary"><?php echo $amostra['titulo'] ?></h5>
                            <p class="text-right font-small"><?php traduzirData($amostra); ?></p>
                        </div>
                        <div class="col">
                            <?php if ($amostra['url_imagem'] != "") { ?>
                                <img class="img-fluid rounded" src="<?php echo $amostra['url_imagem']; ?>" alt="Foto da Notícia">
                            <?php } ?>
                        </div>
                    </div>
                    <?php echo $amostra['conteudo']; ?>

                    <!-- BOTÃO PARA VOLTAR PRA PÁGINA DE NOTÍCIA -->
                    <?php include "btnVoltar.php" ?>

                </div>
            </div>
    <?php
        }
    }
    ?>

</div>

<?php include '../defaultBotton.php'; ?>