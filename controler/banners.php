<?php

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= '/models/banners.php';
include "$path";


function banners(){
    $x = bdConnect(1);
    $results = $x -> query(listarBanners());
    $x = bdConnect(0);
    return $results;
}

/*function banners(){
    $x = mysqli_query(bdConnect(1), listarBanners());
    bdConnect(0); // Fechando a conexão
    return $x;
}*/