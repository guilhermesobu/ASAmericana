<?php

$path = $_SERVER['DOCUMENT_ROOT'] . '/v1/models/conteudo.php';
include "$path";


function conteudo($titulo){
    $x = bdConnect(1);
    $results = $x -> query(listarConteudo($titulo));
    $x = bdConnect(0);
    return $results;
}