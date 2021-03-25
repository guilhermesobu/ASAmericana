<!-- BANNERS QUE APARECEM NA HOME -->

<?php
//STARTANDO O CONTOLLER
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= '/controler/banners.php';
include "$path";

//Trazer todas as noticias
$banners = banners();

while ($amostra = $banners->fetch_assoc()) {
?>

    <div class="row pt-2 p-0 justify-content-center">
        <div class="col-12 pt-2 banner-width">
            <a class="banner-back btn mx-auto d-block" href="<?php echo $amostra['url_redirecionamento'] ?>">
                <img class="img-fluid py-1" src="<?php echo $amostra['url_imagem'] ?>" alt="Benefício Eventual (COVID-19)">
            </a>
        </div>
    </div>

<?php } ?>