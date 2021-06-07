<?php
include '../defaultTop.php';

if (isset($_GET['id'])) {
    //STARTANDO O CONTOLLER
    $path = $_SERVER['DOCUMENT_ROOT'] . '/v1/controler/noticias.php';
    include $path;

    //Trazer todas as noticias
    $noticias = noticias();

    $encontrado = 0;

    if ($noticias) {
        while ($amostra = $noticias->fetch_assoc()) {
            if (isset($_GET['id']) && $amostra['id'] != $_GET['id']) {
                continue;
            } elseif (isset($_GET['id']) && $amostra['ativo'] == 1) {
                $encontrado++;
?>
                <!-- TITULO DEVE MUDAR PARA CADA PÁGICA EM QUE ESTIVER -->
                <title>SASDH - Notícia - <?php echo $amostra['titulo']; ?></title>

                <!-- BREADCRUMB -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><label>Navegação Estrutural</label></li>
                        <li class="breadcrumb-item"><a href="/v1/">Página Inicial</a></li>
                        <li class="breadcrumb-item"><a href="/v1/view/noticias/">Notícias</a></li>
                        <li class="breadcrumb-item active text-truncate" aria-current="page"><?php echo traduzirDataAbreviada($amostra) . " - " . $amostra["titulo"]; ?></li>
                    </ol>
                </nav>

                <!-- SUMARY -->
                <div class="sumary link-white" id="sumario">
                    <h3>Sumário</h3>
                    <ol>
                        <li><a href="#noticias">Notícia - <?php echo $amostra["titulo"] ?></a></li>
                    </ol>
                </div>

                <!-- INÍCIO DO CONTEÚDO -- OBS PARA ACESSIBILIDADE -->
                <a href="#iniciodoconteudo" class="oculto">Início do conteúdo</a>
                <!-- INÍCIO DO CONTEÚDO -- OBS PARA ACESSIBILIDADE  -->

                <!-- CONTENT -->
                <div class="content" id="content">

                    <!-- NOTICIAS -->
                    <div class="row p4-5">
                        <div class="col-md-6 align-self-end">
                            <h3 id="noticias"><?php echo $amostra["titulo"] ?></h3>
                            <p class="text-right font-small"><?php traduzirData($amostra); ?></p>
                        </div>
                        <div class="col">
                            <?php if ($amostra["url_imagem"] != "") { ?>
                                <img class="img-fluid rounded" src="<?php echo $amostra["url_imagem"]; ?>" alt="Foto da Notícia">
                            <?php } ?>
                        </div>
                    </div>
                    <?php echo $amostra["conteudo"]; ?>

                    <!-- BOTÃO PARA VOLTAR PRA PÁGINA DE NOTÍCIA -->
                    <a href="/v1/view/noticias/">Voltar para a página de notícias.</a>

                    <!-- FIM DO CONTEÚDO -- OBS PARA ACESSIBILIDADE  -->
                    <a href="#finaodoconteudo" class="oculto">Final do conteúdo</a>
                    <!-- FIM DO CONTEÚDO -- OBS PARA ACESSIBILIDADE  -->

                </div>

            <?php
            }
        }
        if ($encontrado == 0) { ?>
            <meta http-equiv="refresh" content="0; URL='/v1/view/noticias/'" />
    <?php
        }
    }
} else {
    ?>
    <!-- TITULO DEVE MUDAR PARA CADA PÁGICA EM QUE ESTIVER -->
    <title>SASDH - Notícia não encontrada</title>

    <!-- BREADCRUMB -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><label>Navegação Estrutural</label></li>
            <li class="breadcrumb-item"><a href="/v1/">Home</a></li>
            <li class="breadcrumb-item"><a href="/v1/view/noticias/">Notícias</a></li>
            <li class="breadcrumb-item active text-truncate" aria-current="page">Notícia não encontrada</li>
        </ol>
    </nav>

    <!-- SUMARY -->
    <div class="sumary link-white" id="sumario">
        <h3>Sumário</h3>
        <ol>
            <li><a href="#noticias">Notícia não encontrada</a></li>
        </ol>
    </div>

    <!-- INÍCIO DO CONTEÚDO -- OBS PARA ACESSIBILIDADE -->
    <a href="#iniciodoconteudo" class="oculto">Início do conteúdo</a>
    <!-- INÍCIO DO CONTEÚDO -- OBS PARA ACESSIBILIDADE  -->

    <!-- CONTENT -->
    <div class="content" id="content">

        <!-- BOTÃO PARA VOLTAR PRA PÁGINA DE NOTÍCIA -->
        <a href="/v1/view/noticias/">Voltar para a página de notícias.</a>

        <!-- FIM DO CONTEÚDO -- OBS PARA ACESSIBILIDADE  -->
        <a href="#finaodoconteudo" class="oculto">Final do conteúdo</a>
        <!-- FIM DO CONTEÚDO -- OBS PARA ACESSIBILIDADE  -->

    </div>

<?php
}

include '../defaultBotton.php';
