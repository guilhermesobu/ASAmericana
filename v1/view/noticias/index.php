<?php
include '../defaultTop.php';
?>

<!-- TITULO DEVE MUDAR PARA CADA PÁGICA EM QUE ESTIVER -->
<title>SASDH - Notícia - <?php echo $amostra['titulo']; ?></title>

<!-- BREADCRUMB -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><label>Navegação Estrutural</label></li>
        <li class="breadcrumb-item"><a href="/v1/">Página Inicial</a></li>
        <li class="breadcrumb-item active">Notícias</li>
    </ol>
</nav>

<!-- SUMARY -->
<div class="sumary link-white" id="sumario">
    <h3>Sumário</h3>
    <ol>
        <li><a href="#noticias">Notícias</a></li>
    </ol>
</div>

<!-- INÍCIO DO CONTEÚDO -- OBS PARA ACESSIBILIDADE -->
<a href="#iniciodoconteudo" class="oculto">Início do conteúdo</a>
<!-- INÍCIO DO CONTEÚDO -- OBS PARA ACESSIBILIDADE  -->

<!-- CONTENT -->
<div class="content" id="content">

    <h3 id="noticias">Notícias</h3>

    <?php
    //STARTANDO O CONTOLLER
    $path = $_SERVER['DOCUMENT_ROOT'] . '/v1/controler/noticias.php';
    include $path;

    //Trazer todas as noticias
    $noticias = noticias();

    while ($amostra = $noticias->fetch_assoc()) {
        if ($amostra['ativo'] == 1) {
    ?>
            <div class="py-2 border-bottom text-truncate">
                <a href="/v1/view/noticias/noticias.php?id=<?php echo $amostra['id']; ?>">
                    <?php
                    echo '(';
                    echo traduzirDataAbreviada($amostra) . ') ' . $amostra['titulo'];
                    ?>
                </a>
            </div>
    <?php
        }
    }
    ?>
</div>
<?php

include '../defaultBotton.php';