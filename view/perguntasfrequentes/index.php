<!-- HISTORICO -->
<?php
include '../defaultTop.php';

//STARTANDO O CONTOLLER
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= '/controler/faq.php';
include "$path";

$assunto = assunto();
?>


<div class="container shadow rounded">

    <nav aria-label="breadcrumb" class="pt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Perguntas Frequentes</li>
        </ol>
    </nav>

    <div class="row-fluid p-4">

        <h4 class="text-primary">Perguntas Frequentes</h4>

        <div class="col-12">Publicado em <spam class="bg-primary px-2 rounded text-white">00/00/2021</spam> | Atualizado em <spam class="bg-primary px-2 rounded text-white">00/00/2021</spam>
        </div>

        <form action="faq.php" method="GET" class="pt-3">
            <?php
            while ($amostra = $assunto->fetch_assoc()) {
            ?>
                <button type="submit" class="btn btn-gradient-blue w-100 mt-2" name="id" value="<?php echo $amostra['id']; ?>">
                    <?php echo $amostra['assunto']; ?>
                </button>
            <?php
            }
            ?>
        </form>

    </div>


</div>

<?php
include '../defaultBotton.php';
?>