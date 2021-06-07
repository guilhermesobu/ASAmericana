<?php
include 'view/defaultTop.php';
?>

<?php
//STARTANDO O CONTOLLER
$path = $_SERVER['DOCUMENT_ROOT'] . '/v1/controler/noticias.php';
include $path;

//Trazer todas as noticias
$noticias = noticias();
var_dump($noticias);
if (isset($_GET['conteudo']) == 'noticias') {


    if ($noticias) {
        while ($amostra = $noticias->fetch_assoc()) {
            if ($amostra['id'] != $_GET['id']) {
                continue;
            } elseif ($amostra['ativo'] == 1) {
?>
                <!-- TITULO DEVE MUDAR PARA CADA PÁGICA EM QUE ESTIVER -->
                <title>SASDH - Notícia - <?php echo $amostra['titulo']; ?></title>

                <!-- BREADCRUMB -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><label>Navegação Estrutural</label></li>
                        <li class="breadcrumb-item"><a href="/v1/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/v1/index.php">Notícias</a></li>
                        <li class="breadcrumb-item active text-truncate" aria-current="page"><?php echo traduzirDataAbreviada($amostra) . ' - ' . $amostra['titulo']; ?></li>
                    </ol>
                </nav>

                <!-- SUMARY -->
                <div class="sumary link-white" id="sumario">
                    <h3>Sumário</h3>
                    <ol>
                        <li><a href="#noticias">Notícia - <?php echo $amostra['titulo'] ?></a></li>
                    </ol>
                </div>

                <!-- INÍCIO DO CONTEÚDO -- OBS PARA ACESSIBILIDADE -->
                <a href="#iniciodoconteudo" class="oculto">Início do conteúdo</a>
                <!-- INÍCIO DO CONTEÚDO -- OBS PARA ACESSIBILIDADE  -->

                <!-- CONTENT -->
                <div class="content" id="content">

                    <!-- NOTICIAS -->
                    <div class="row pb-5">
                        <div class="col-md-6 align-self-end">
                            <h3 id="noticias"><?php echo $amostra['titulo'] ?></h3>
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
                    <a href="/v1/main.php">Voltar para listagem de notícias.</a>

                </div>
<?php
            }
        }
    }
} ?>

<!-- FIM DO CONTEÚDO -- OBS PARA ACESSIBILIDADE  -->
<a href="#finaodoconteudo" class="oculto">Final do conteúdo</a>
<!-- FIM DO CONTEÚDO -- OBS PARA ACESSIBILIDADE  -->
</div>

<?php
include 'view/defaultBotton.php';
?>