<!-- REDE PÚBLICA -->
<?php
include '../../defaultTop.php';
?>

<div class="container shadow rounded">

    <nav aria-label="breadcrumb" class="pt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/view/assistenciaSocial">Assistência Social</a></li>
            <li class="breadcrumb-item active" aria-current="page">Entidades</li>
        </ol>
    </nav>

    <div class="row-fluid p-4">

        <h3 class="text-left">Entidades</h3>

        <div>

            <?php 
            include 'psb.php';      // Organizações da Sociedade Civil - Proteção Social Básica
            include 'psem.php';     // Organizações da Sociedade Civil - Proteção Social Especial - Média Complexidade
            include 'psea.php';     // Organizações da Sociedade Civil - Proteção Social Especial - Alta Complexidades
            ?>

        </div>

    </div>
</div>
<?php
include '../../defaultBotton.php';
?>