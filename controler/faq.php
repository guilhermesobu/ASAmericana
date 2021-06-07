<?php

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= '/models/faq.php';
include "$path";

function perguntasFrequentes($id){
    $x = bdConnect(1);
    $results = $x -> query(listarPerguntas($id));
    $x = bdConnect(0);
    return $results;
}

function assunto(){
    $x = bdConnect(1);
    $results = $x -> query(listarAssunto());
    $x = bdConnect(0);
    return $results;
}

function conteudo($id){
    $x = bdConnect(1);
    $results = $x -> query(demonstrarConteudo($id));
    $x = bdConnect(0);
    return $results;
}