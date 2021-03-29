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

    <div class="mt-5 mx-3">
        <div class="row">
            <h3 class="px-4">Notícias</h3>
        </div>
        <div class="d-none d-md-block">
            <div class="row">
                <div class="col-md-3">Data de publicação</div>
                <div class="col">Assunto</div>
            </div>
        </div>

        <!-- SEPARADOR DA LISTA -->
        <?php
        while ($amostra = $noticias->fetch_assoc()) {
            if ($amostra['ativo'] == 1) {
        ?>
                <form action='noticias.php' method='POST' class="border-top">
                    <button class="btn w-100 " type="submit" name="id" value="<?php echo $amostra['id']; ?>">
                        <div class="row  d-flex align-items-center py-2 text-primary">
                            <div class="col-3 text-left"><?php echo traduzirDataAbreviada($amostra); ?></div>
                            <div class="col text-left"><?php echo $amostra['titulo']; ?></div>
                        </div>
                    </button>
                </form>
        <?php
            }
        }
        ?>

    </div>


</div>

<?php include '../defaultBotton.php'; ?>