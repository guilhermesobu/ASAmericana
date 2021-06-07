<?php

function listarPerguntas($id){
    return "SELECT pf.id, pf.titulo, pf.conteudo, pf.ativo, pfa.assunto, pfa.id pfaid FROM perguntas_frequentes pf INNER JOIN perguntas_frequentes_assunto pfa ON pf.id_pf_assunto = pfa.id WHERE pfa.id = $id";
}

function listarAssunto(){
    return 'SELECT id, assunto FROM perguntas_frequentes_assunto WHERE ativo = 1';
}

function demonstrarConteudo($id){
    return "SELECT id, assunto FROM perguntas_frequentes_assunto WHERE id = $id AND ativo = 1";
}