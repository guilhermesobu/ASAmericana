<?php

function listarConteudo($titulo){
    return "SELECT html FROM conteudo WHERE titulo = '$titulo'";
}