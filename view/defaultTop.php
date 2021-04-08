<!-- HEADER -->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cousine&display=swap">
    <link rel="stylesheet" href="/scss/index.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="/scss/fonts.css?<?php echo time(); ?>">
    <link rel="shortcut icon" type="/image/x-icon" hef="favicon.ico" />

    <title>Secretaria de Assistência Social e Direitos Humanos</title>
    <meta name="description" content="Portal de informações da Secretaria de Assistência Social e Direitos Humano de Americana/SP">
    <meta name="keywords" content="Secretaria de Assistencia, Secretaria, Assistencia Social, Americana, AS, Secretaria de Assistência Social e Direitos Humanos, SASDH, Assistencia Social Americana, Americana, Prefeitura de Americana">

    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
</head>

<body class="nunito" style="min-width: 350px;">
    <!-- adamina, montserrat, nunito -->


    <!-- CONEXÃO COM BANCO DE DADOS -->
    <?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= '/models/connection.php';
    include "$path";
    ?>


    <!-- Inicio do projeto -->
    <div class="container-fluid py-4 bg-prefeitura">
        <div class="row justify-content-between d-flex align-items-center">

            <!-- LOGOTIPO E CABEÇALHO - INICIO -->
            <div class="col-xl-2 col-12 text-center">
                <!-- <img class="rounded-circle bg-white px-3" src="/src/img/brasao_americana.png" style="padding-top: 10px; padding-bottom: 10px; max-height: 90px;"> -->
                <img class="px-3 bg-logo-am rounded-pill" src="/src/img/logo_americana_transparente.png" style="padding-top: 10px; padding-bottom: 10px; max-height: 90px;">
            </div>

            <div class="col-xl-8 col-12">
                <div class="text-center">
                    <h3 class="pt-2 text-white sasdh-logo">Secretaria de Assistência Social e Direitos Humanos</h3>
                </div>
            </div>

            <div class="col-2">
            </div>
            <!-- LOGOTIPO E CABEÇALHO - TERMINO -->

        </div>
    </div>

    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?>

    <!-- CONTENT -->
    <div class="container-fluid text-justify py-4">
        <div class="row justify-content-center">
            <div id="app" class="col-xl-8 col-12 bg-white">