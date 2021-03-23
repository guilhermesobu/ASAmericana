<!-- REDIRECT para a página da ASSISTENCIA SOCIAL principal e não entrar no "VIEW" -->

<!--
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="0; URL='/'"/>
    </head>
</html>
-->

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

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Noticias</li>
        </ol>
    </nav>

    <div class="my-5 mx-3">
        <div class="row">
            <h3 class="px-4">Notícias</h3>
        </div>
        <div class="d-none d-md-block">
            <div class="row border-bottom ">
                <div class="col-md-3">Data de publicação</div>
                <div class="col">Assunto</div>
            </div>
        </div>

        <!-- SEPARADOR DA LISTA -->
        <?php
        while ($amostra = $noticias->fetch_assoc()) {
        ?>
        
            <form action='noticias.php' method='POST' class="border-bottom">
                <button class="btn w-100 " type="submit" id="<?php echo $amostra['id']; ?>">
                    <div class="row  d-flex align-items-center py-2">
                        <div class="col-3 text-left"><?php echo date("d/m/Y", strtotime($amostra['data'])); ?></div>
                        <div class="col text-left"><?php echo $amostra['conteudo']; ?></div>
                    </div>
                </button>
            </form>

        <?php
        }
        ?>

<!-- PARA ESCONDER os codigos antigos
        <a href="/view/noticias/2021/03120002.php">
            <div class="row border-bottom d-flex align-items-center py-2">
                <div class="col-3">12/03/2021</div>
                <div class="col">Educação e Assistência Social estudam plano de atendimento a alunos em vulnerabilidade alimentar</div>
            </div>
        </a>

        <a href="/view/noticias/2021/03120001.php">
            <div class="row border-bottom d-flex align-items-center py-2">
                <div class="col-3">12/03/2021</div>
                <div class="col">Atendimento nos próximos 15 dias de restrições do Plano São Paulo de combate à Covid-19</div>
            </div>
        </a>

        <a href="/view/noticias/2021/03090001.php">
            <div class="row border-bottom d-flex align-items-center py-2">
                <div class="col-3">09/03/2021</div>
                <div class="col">Prefeito Chico Sardelli institui o Programa para Atenção à População em Situação de Rua</div>
            </div>
        </a>

        <a href="/view/noticias/2021/03080002.php">
            <div class="row border-bottom d-flex align-items-center py-2">
                <div class="col-3">08/03/2021</div>
                <div class="col">CRAS celebram o Dia da Mulher</div>
            </div>
        </a>
-->

    </div>


</div>

<?php include '../defaultBotton.php'; ?>
