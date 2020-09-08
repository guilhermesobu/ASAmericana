<!-- HEADER -->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cousine&display=swap">
    <link rel="stylesheet" href="index.css">
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
</head>

<body>

    <div class="row-fluid">
        <h3 class="col-12 pt-4">Secretaria de Assistência Social e Direitos Humanos</h3>
    </div>

<!-- NAVBAR -->
    <nav class="rounded-0 navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-white border-white" href="#">SASDH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">Página principal <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dúvidas Frequêntes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item btn" id="btnCad">Cadastro Único (CAD)</a>

                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header" style="font-size: 10px">Auxílio Emergencial (AE - Caixa)</span>
                        <a class="dropdown-item btn" id="btnAeIg">AE - Informações Gerais</a>
                        <a class="dropdown-item btn" id="btnAeCa">AE - Cadastramento</a>
                        <a class="dropdown-item btn" id="btnAeAp">AE - APP</a>
                        <a class="dropdown-item btn" id="btnAeRa">AE - Resultado da Avaliação do Cadastro</a>
                        <a class="dropdown-item btn" id="btnAePb">AE - Pagamento do Benefício</a>
                        <a class="dropdown-item btn" id="btnAeCe">AE - Casos Especiais</a>

                    </div>
                </li>
            </ul>
        </div>
    </nav>

<!-- CONTENT -->
    <div id="app" class="container font-cousine text-justify">