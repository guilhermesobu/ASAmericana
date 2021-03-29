<?php

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= '/models/faq.php';
include "$path";

function perguntasFrequentes(){
    $x = bdConnect(1);
    $results = $x -> query(listarPerguntas());
    $x = bdConnect(0);
    return $results;
}

function assunto(){
    $x = bdConnect(1);
    $results = $x -> query(listarAssunto());
    $x = bdConnect(0);
    return $results;
}