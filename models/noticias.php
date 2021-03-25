<?php

function listarNoticias(){
    return 'SELECT * FROM noticia';
}

function contarAtivos(){
    return 'SELECT COUNT(ativo) FROM noticia WHERE ativo = 1 AND carrossel = 1';
}