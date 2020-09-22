<!-- HEADER -->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cousine&display=swap">
    <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
</head>

<body>

    <div class="container-fluid">
        <div class="row justify-content-between d-flex align-items-center">

            <div class="col-2 text-center">
                <img src="https://www.asamericana.com.br/src/brasao_americana.png" style="padding-top: 10px; padding-bottom: 10px; max-height: 90px;">
            </div>

            <div class="col-8">
                <div class="d-none d-md-block text-center">
                    <h3 class="pt-2">Secretaria de Assistência Social e Direitos Humanos</h3>
                    <h4>Prefeitura de Americana</h4>
                </div>
                <div class="d-block d-md-none text-center">
                    <h3 class="pt-2">SASDH</h3>
                </div>
            </div>

            <div class="col-2">
            </div>

        </div>
    </div>

    <!-- NAVBAR -->
    <div class="row-fluid border-bottom border-primary sticky-top">
        <nav class="rounded-bottom navbar navbar-expand-md navbar-light bg-white">
            <a class="border rounded px-1 py-0 navbar-brand text-white bg-primary" href="https://asamericana.com.br/"><strong>SASDH</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item border-left border-right border-primary">
                        <a class="nav-link" href="https://www.asamericana.com.br/">Página principal <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item border-right border-primary">
                        <a class="nav-link" href="https://www.asamericana.com.br/servicos.php">Serviços</a>
                    </li>

                    <li class="nav-item dropdown border-right border-primary">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dúvidas Frequentes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item btn" id="btnCad" href="https://www.asamericana.com.br/perguntasfrequentes/cad.php">Cadastro Único (CAD)</a>
                            <div class="dropdown-divider"></div>
                            <span class="dropdown-header" style="font-size: 10px">Auxílio Emergencial (AE - Caixa)</span>
                            <a class="dropdown-item btn" id="btnAeIg" href="https://www.asamericana.com.br/perguntasfrequentes/aeinformacoes.php">AE - Informações Gerais</a>
                            <a class="dropdown-item btn" id="btnAeCa" href="https://www.asamericana.com.br/perguntasfrequentes/aecadastramento.php">AE - Cadastramento</a>
                            <a class="dropdown-item btn" id="btnAeAp" href="https://www.asamericana.com.br/perguntasfrequentes/aeapp.php">AE - APP</a>
                            <a class="dropdown-item btn" id="btnAeRa" href="https://www.asamericana.com.br/perguntasfrequentes/aeresultado.php">AE - Resultado da Avaliação do Cadastro</a>
                            <a class="dropdown-item btn" id="btnAePb" href="https://www.asamericana.com.br/perguntasfrequentes/aepagamento.php">AE - Pagamento do Benefício</a>
                            <a class="dropdown-item btn" id="btnAeCe" href="https://www.asamericana.com.br/perguntasfrequentes/aecasosespeciais.php">AE - Casos Especiais</a>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>

    <!-- CONTENT -->
    <div class="container font-cousine text-justify py-4">
        <div class="row">
            <div id="app" class="col-md-10 col-sm-12">