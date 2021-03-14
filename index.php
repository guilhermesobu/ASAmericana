<?php include 'view/defaultTop.php'; ?>

<div class="p-3 mb-4 shadow rounded">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav>

    <!-- NOTICIAS -->
    <?php 
        include 'view/noticias/noticiasIndex.php';
    ?>

    <!-- CORPO DO INDEX DA PÁGINA -->
    <div class="row pt-2 p-0 justify-content-center">

        <div class="col-12 pt-2 banner-width">
            <a class="banner-back btn mx-auto d-block" href="https://forms.gle/Axn9WYHJCw6W5pw28">
                <img class="img-fluid py-1" src="/src/img/banner-cesta-emergencial-acao-social.png" alt="Benefício Eventual (COVID-19)">
            </a>
        </div>

        <div class="col-12 pt-2 banner-width">
            <a class="banner-back btn mx-auto d-block" href="https://forms.gle/Axn9WYHJCw6W5pw28">
                <img class="img-fluid py-1" src="/src/img/banner-cesta-emergencial-acao-social.png" alt="Benefício Eventual (COVID-19)">
            </a>
        </div>

    </div>

</div>

<?php include 'view/defaultBotton.php'; ?>