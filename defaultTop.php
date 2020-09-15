<!-- HEADER -->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cousine&display=swap">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="../index.css">
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-between">

            <div class="col-2 text-center">
                <img class="logo" src="http://asamericana.com.br/src/brasao_americana.png">
            </div>

            <div class="col">
                <div class="d-none d-md-block text-center">
                    <h3 class="pt-2">Secretaria de Assistência Social e Direitos Humanos</h3>
                    <h4>Prefeitura de Americana</h4>
                </div>
                <div class="d-block d-md-none text-center">
                    <h3 class="pt-2">SASDH</h3>
                </div>
            </div>

            <div class="col-2 d-none d-md-block">
            </div>

        </div>
    </div>
    
    <!-- NAVBAR -->
    <nav class="rounded-0 navbar navbar-expand-lg navbar-light bg-dark">
        <a class="border rounded px-1 py-0 navbar-brand text-black bg-white" href="/"><strong>SASDH</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item active">
                    <a class="nav-link text-white" href="/">Página principal <span class="sr-only">(current)</span></a>
                </li>

                <li>
                    <a class="nav-link text-white" href="/servicos.php">Serviços</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dúvidas Frequentes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item btn" id="btnCad" href="/perguntasfrequentes/cad.php">Cadastro Único (CAD)</a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header" style="font-size: 10px">Auxílio Emergencial (AE - Caixa)</span>
                        <a class="dropdown-item btn" id="btnAeIg" href="/perguntasfrequentes/aeinformacoes.php">AE - Informações Gerais</a>
                        <a class="dropdown-item btn" id="btnAeCa" href="/perguntasfrequentes/aecadastramento.php">AE - Cadastramento</a>
                        <a class="dropdown-item btn" id="btnAeAp" href="/perguntasfrequentes/aeapp.php">AE - APP</a>
                        <a class="dropdown-item btn" id="btnAeRa" href="/perguntasfrequentes/aeresultado.php">AE - Resultado da Avaliação do Cadastro</a>
                        <a class="dropdown-item btn" id="btnAePb" href="/perguntasfrequentes/aepagamento.php">AE - Pagamento do Benefício</a>
                        <a class="dropdown-item btn" id="btnAeCe" href="/perguntasfrequentes/aecasosespeciais.php">AE - Casos Especiais</a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="container font-cousine text-justify">
        <div class="row">
            <div id="app" class="col-md-10">