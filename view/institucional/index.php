<!-- HISTORICO -->
<?php
include '../defaultTop.php';
?>

<div class="container shadow rounded">

    <nav aria-label="breadcrumb" class="pt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Institucional</li>
            <li class="breadcrumb-item active" aria-current="page">Estrutura Organizacional</li>
        </ol>
    </nav>

    <?php 
    include 'organograma/sasdh.php';
    include 'organograma/gestaoOperacional.php';
    include 'organograma/gestaoEstrategica.php';
    ?>

    

</div>

<?php
include '../defaultBotton.php';
?>