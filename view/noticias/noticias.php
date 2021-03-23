<?php
include '../defaultTop.php';

//STARTANDO O CONTOLLER
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= '/controler/noticias.php';
include "$path";

//Trazer todas as noticias
$noticias = noticias();

$getId = 1;
?>

<div class="p-3 mb-4 shadow rounded">
    <?php
    while ($amostra = $noticias->fetch_assoc()) {
        if ($amostra['id'] == $getId) {
            continue;
        } else {
    ?>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Noticias</li>
                </ol>
            </nav>

            <div class="my-5 mx-3">

                <!-- NOTICIAS -->
                <div class="row-fluid pb-4 px-4">
                    <div class="row">
                        <div class="col-md-6 align-self-end">
                            <h5 class="text-primary"><?php echo $amostra['titulo'] ?></h5>
                            <p class="text-right font-small"><?php traduzirData($amostra); ?></p>
                        </div>
                        <div class="col">
                            <img class="img-fluid rounded" src="<?php echo $amostra['url_imagem'] ?>" alt="Foto da Notícia">
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