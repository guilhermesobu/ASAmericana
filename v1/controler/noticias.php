<?php

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= '/v1/models/noticias.php';
include "$path";


function noticias(){
    $x = bdConnect(1);
    $results = $x -> query(listarNoticias());
    $x = bdConnect(0);
    return $results;
}

function ativos(){
    $x = bdConnect(1);
    $results = $x -> query(contarAtivos());
    $x = bdConnect(0);
    return $results;
}

function paginador(){
    $x = bdConnect(1);
    $results = $x -> query(listarPaginador());
    $x = bdConnect(0);
    return $results;
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

function traduzirDataAbreviada($data){
    echo date("d/m/Y", strtotime($data['data']));
}
