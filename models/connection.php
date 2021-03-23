<?php


// BANCO DE DADOS - Dados do banco de dados para conexão
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'asamericana');


// BANCO DE DADOS - Função para conectar e desconectar o BD
function bdConnect($x)
{
    $connection = null;
    $dbHost = DB_HOST;
    $dbUser = DB_USER;
    $dbPassword = DB_PASSWORD;
    $dbName = DB_NAME;

    if ($x == 1) {
        return $connection = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
        //var_dump($teste);
        //return $connection;
    } else {
        $connection = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
        //var_dump("FECHADO");
        return mysqli_close($connection);
    }
}
