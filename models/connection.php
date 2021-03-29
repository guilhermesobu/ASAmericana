<?php
// BANCO DE DADOS - Dados do banco de dados para conexão LOCALHOST
/*
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'asamericana');
*/

// BANCO DE DADOS - Dados do banco de dados para conexão PRODUÇÃO
///*
define('DB_HOST', 'localhost');
define('DB_USER', 'u975774483_administrador');
define('DB_PASSWORD', 'D5a*PcKVb:');
define('DB_NAME', 'u975774483_asamericana');
//*/

// BANCO DE DADOS - Função para conectar e desconectar o BD
function bdConnect($x)
{
    if ($x == 1) {  //CONECTA
        return $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    } else {        //DESCONECTA
        $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        return mysqli_close($connection);
    }
}

