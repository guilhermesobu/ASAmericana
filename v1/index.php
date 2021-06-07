<?php
include "view/defaultTop.php";

if (isset($_GET["conteudo"])) {
    //STARTANDO O CONTOLLER
    $pathMain = $_SERVER['DOCUMENT_ROOT'] . '/v1/controler/conteudo.php';
    include $pathMain;

    //PEGANDO O TITULO
    $conteudo = conteudo($_GET['conteudo']);

    //Trazer o conteúdo específico
    while ($amostra = $conteudo->fetch_assoc()) {
        echo $amostra['html'];
    }
} else {
?>


    <!-- TITULO DEVE MUDAR PARA CADA PÁGICA EM QUE ESTIVER -->
    <title>SASDH</title>

    <!-- BREADCRUMB -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><label>Navegação Estrutural</label></li>
            <li class="breadcrumb-item active" aria-current="page">Página Inicial</li>
        </ol>
    </nav>

    <!-- SUMARY -->
    <div class="sumary link-white" id="sumario">
        <h3>Sumário</h3>
        <ol>
            <li><a href="#noticias">Notícias</a></li>
            <li><a href="#servicos">Serviços/Banners</a></li>
        </ol>
    </div>

    <!-- INÍCIO DO CONTEÚDO -- OBS PARA ACESSIBILIDADE -->
    <a href="#iniciodoconteudo" class="oculto">Início do conteúdo</a>
    <!-- INÍCIO DO CONTEÚDO -- OBS PARA ACESSIBILIDADE  -->


    <!-- CONTENT -->
    <div class="content" id="content">

        <h3 id="noticias">Noticias</h3>

        <?php
        //STARTANDO O CONTOLLER
        $path = $_SERVER['DOCUMENT_ROOT'] . '/v1/controler/noticias.php';
        include $path;
        //Trazer todas as noticias
        $noticias = noticias();
        $paginador = paginador();

        ?>
        <!-- SEPARADOR DA LISTA -->
        <?php
        $contador = 0;
        while ($amostra = $noticias->fetch_assoc()) {
            if ($amostra['ativo'] == 1 && $contador < 5) {
        ?>
                <div class="py-2 border-top text-truncate">
                    <a href="/v1/view/noticias/noticias.php?id=<?php echo $amostra['id']; ?>">
                        <?php echo '(';
                        echo traduzirDataAbreviada($amostra) . ') ' . $amostra['titulo']; ?>
                    </a>
                </div>
            <?php
                $contador++;
            } else if ($contador == 5) {
            ?>
                <div class="pt-3 border-top"><a href="/v1/view/noticias/">Veja as notícias mais antigas</a></div>
        <?php
                break;
            }
        }
        ?>

        <h3 id="servicos" class="pt-4">Serviços/Banners</h3>

        <?php include 'view/banner.php';?>

    </div>
<?php

}

include 'view/defaultBotton.php';
