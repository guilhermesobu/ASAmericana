<?php

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= '/models/noticias.php';
include "$path";

$pathC = $_SERVER['DOCUMENT_ROOT'];
$pathC .= '/models/connection.php';
include "$pathC";


function noticias(){
    $x = mysqli_query(bdConnect(1), listarNoticias());
    bdConnect(0); // Fechando a conexão
    return $x;
    //var_dump($x['titulo']);
}

function traduzirData($data){
    switch ( date("D", strtotime($data['data'])) ) {
        case 'Mon': echo "Segunda-Feira"; break;
        case 'Tue': echo "Terça-Feira"; break;
        case 'Wed': echo "Quarta-Feira"; break;
        case 'Thu': echo "Quinta-Feira"; break;
        case 'Fri': echo "Sexta-Feira"; break;
        case 'Sat': echo "Sábado"; break;
        case 'Sun': echo "Domingo"; break;
    };
    echo ", " . date("d", strtotime($data['data']));
    switch ( date("n", strtotime($data['data'])) ) {
        case  1: echo " de Janeiro de "; break;
        case  2: echo " de Fevereiro de "; break;
        case  3: echo " de Março de "; break;
        case  4: echo " de Abril de "; break;
        case  5: echo " de Maio de "; break;
        case  6: echo " de Junho de "; break;
        case  7: echo " de Julho de "; break;
        case  8: echo " de Agosto de "; break;
        case  9: echo " de Setembro de "; break;
        case 10: echo " de Outubro de "; break;
        case 11: echo " de Novembro de "; break;
        case 12: echo " de Dezembro de "; break;
    };
    echo date("Y", strtotime($data['data']));
}
