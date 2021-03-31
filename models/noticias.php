<?php

function listarNoticias(){
    return 'SELECT * FROM noticia ORDER BY id DESC';
}

function contarAtivos(){
    return 'SELECT COUNT(ativo) FROM noticia WHERE ativo = 1 AND carrossel = 1 AND url_imagem != ""';
}