<!-- HEADER -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel='stylesheet' href='/v1/bootstrap/css/bootstrap.min.css' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Cousine&display=swap'>
    <link rel='stylesheet' href='/v1/scss/index.css?<?php echo time(); ?>'>
    <link rel='stylesheet' href='/v1/scss/fonts.css?<?php echo time(); ?>'>
    <link rel='shortcut icon' type='/v1/image/x-icon' hef='favicon.ico' />

    <!--<title>Secretaria de Assistência Social e Direitos Humanos</title>-->
    <meta name="description" content="Portal de informações da Secretaria de Assistência Social e Direitos Humano de Americana/SP">
    <meta name="keywords" content="Secretaria de Assistencia, Secretaria, Assistencia Social, Americana, AS, Secretaria de Assistência Social e Direitos Humanos, SASDH, Assistencia Social Americana, Americana, Prefeitura de Americana">

    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
</head>




<body class="nunito" style="min-width: 350px;">


    <!-- CONEXÃO COM BANCO DE DADOS -->
    <?php 
    $path = $_SERVER['DOCUMENT_ROOT'] . '/v1/models/connection.php';
    include "$path";
    ?>

    <!-- INÍCIO DO PROJETO -- ID DO BOTÃO DE VOLTAR AO TOPO -->
    <div class="container-fluid pb-4 border-bottom border-white" id="start">

    
        <!-- ACESSIBILIDADE -->
        <?php include 'menuAcessibilidade.php'; ?>


        <div class="row justify-content-between d-flex align-items-center">

            <!-- LOGOTIPO E CABEÇALHO - INICIO -->
            <div class="col-xl-2 col-12 text-center">
                <img class="px-3" src="/src/img/logo_americana_transparente.png" style="padding-top: 10px; padding-bottom: 10px; max-height: 90px;" alt="Logo oficial da prefeitura de americana" title="Prefeitura de Americana">
            </div>

            <div class="col-xl-6 col-12">
                <div class="text-center">
                    <h1 class="pt-2 b">Secretaria de Assistência Social e Direitos Humanos</h1>
                </div>
            </div>

            <div class="col-1"></div>

        </div>

    </div>

    <div class="container-fluid pt-4 mb-0">
        <div class="row justify-content-start">

            <!-- MENU -->
            <div class="col-lg-3 col-12 px-0 w-100">
                <?php include "menu.php"; ?>
            </div>

            <!-- CONTENT -->
            <div class="col-lg-8 col">