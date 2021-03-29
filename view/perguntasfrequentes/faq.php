<?php
include '../defaultTop.php';

//STARTANDO O CONTOLLER
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= '/controler/faq.php';
include "$path";

//Trazer todas as noticias
$assunto = assunto();
$perguntas = perguntasFrequentes();
$getId = 1;

?>

<div class="p-3 mb-4 shadow rounded">

    <div class="container shadow pb-2 rounded">

        <?php
        while ($amostra = $assunto->fetch_assoc()) {
            if ($amostra['id'] == $_POST['id']) {
        ?>
                <nav aria-label="breadcrumb" class="pt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/view/perguntasfrequentes/">Perguntas Frequentes</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $amostra['assunto']; ?></li>
                    </ol>
                </nav>
                <div class="row-fluid col-12 py-2">
                    <strong>
                        <h3 class="col-12 pt-1 pb-0">Perguntas Frequentes</h3>
                        <p class="pl-3">
                            <?php echo $amostra['assunto']; ?>
                        </p>
                    </strong>
                </div>
        <?php
            }
        }
        ?>


        <?php
        while ($amostra = $perguntas->fetch_assoc()) {
            if ($amostra['ativo'] != 0 && $amostra['pfaid'] == $_POST['id']) {
        ?>

                <div class="row-fluid">
                    <div class="accordion" id="accordionExample">

                        <div class="card rounded mb-1 border border-primary">
                            <div class="p-0 card-header" id="headingOne">
                                <h1 class="mb-0">
                                    <button class="bg-primary rounded-0 font-large btn btn-block text-left px-4" type="button" data-toggle="collapse" data-target="#collapse<?php echo $amostra['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $amostra['id']; ?>">
                                        <strong class="text-white"><?php echo $amostra['titulo']; ?></strong>
                                    </button>
                                </h1>
                            </div>

                            <div id="collapse<?php echo $amostra['id']; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body pt-3 px-3 pb-0">
                                    <?php echo $amostra['conteudo']; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

        <?php
            }
        }
        ?>

    </div>
</div>

<?php include '../defaultBotton.php'; ?>




<?php /*
        while ($amostra = $perguntas->fetch_assoc()) {
            var_dump($amostra);
            if ($amostra['id'] != $_POST['id']) {
                continue;
            } elseif (true) {
        ?>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page"><a href="/">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="/view/noticias/">Noticias</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo traduzirDataAbreviada($amostra) . " - " . $amostra['titulo']; ?></li>
                    </ol>
                </nav>



        <?php
            }
        } */ ?>