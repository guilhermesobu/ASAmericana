<?php include 'view/defaultTop.php'; ?>

<div class="p-3 mb-4 shadow rounded">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav>

    <!-- NOTICIAS -->
    <?php
        include 'view/noticias/noticiasHome.php';
    ?>

    <!-- CORPO DO INDEX DA PÁGINA -->
    <?php
        include 'view/banners.php';
    ?>

</div>

<?php include 'view/defaultBotton.php'; ?>