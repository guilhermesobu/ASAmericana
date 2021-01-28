<!-- HEADER -->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css?<?php echo time(); ?>" crossorigin="anonymous">
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

    <div class="container-fluid py-4 bg-prefeitura">
        <div class="row justify-content-between d-flex align-items-center">

            <div class="col-2 text-center">
                <img class="rounded-circle bg-white px-3" src="/src/img/brasao_americana.png" style="padding-top: 10px; padding-bottom: 10px; max-height: 90px;">
            </div>

            <div class="col-8">
                <div class="d-none d-md-block text-center">
                    <h3 class="pt-2 text-white">Secretaria de Assistência Social e Direitos Humanos</h3>
                    <h4>Prefeitura de Americana</h4>
                </div>
                <div class="d-block d-md-none text-center">
                    <h3 class="pt-2 text-white">SASDH</h3>
                </div>
            </div>

            <div class="col-2">
            </div>

        </div>
    </div>

    <!-- NAVBAR -->
    <div class="row-fluid border-bottom border-primary sticky-top">
        <nav class="rounded-bottom navbar navbar-expand-md navbar-light bg-white">
            <a class="border rounded px-1 py-0 navbar-brand text-white bg-primary" href="/"><strong>SASDH</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav col-md-10  d-flex justify-content-around">

                    <!-- INSTITUCIONAL -->
                    <li class="nav-item dropdown border-primary" id="dropInstitutional">
                        <a class="nav-link dropdown-toggle" id="institutional" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Institucional
                        </a>
                        <div class="dropdown-menu" aria-labelledby="institutional">
                            <a class="dropdown-item btn" href="/view/institucional/historico.php">Histórico</a>
                            <a class="dropdown-item btn" href="">Estrutura Organizacional</a>
                            <a class="dropdown-item btn" href="">Composição</a>
                            <a class="dropdown-item btn" href="">Base Jurídica</a>
                            <a class="dropdown-item btn" href="">Plano Estratégico</a>
                        </div>
                    </li>

                    <!-- ASSISTENCIA SOCIAL -->
                    <li class="nav-item dropdown border-primary" id="dropSocialAssistance">
                        <a class="nav-link dropdown-toggle" id="socialAssistance" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Assistência Social
                        </a>
                        <div class="dropdown-menu" aria-labelledby="socialAssistance">
                            <a class="dropdown-item btn" href="/view/assistenciaSocial/sobre.php">O que é</a>
                            <a class="dropdown-item btn" href="/view/assistenciaSocial/uda.php">Unidade de Atendimento</a>
                            <a class="dropdown-item btn" href="">Documentos</a>
                            <a class="dropdown-item btn" href="https://www.gov.br/cidadania/pt-br/noticias-e-conteudos/publicacoes-1/desenvolvimento-social">Publicações</a>
                        </div>
                    </li>

                    <!-- DIREITOS HUMANOS -->
                    <li class="nav-item dropdown border-primary" id="dropDirHumano">
                        <a class="nav-link dropdown-toggle" id="dirHumano" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Direitos Humanos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dirHumano">
                            <a class="dropdown-item btn" href="/view/direitosHumanos/sobre.php">O que é</a>
                            <a class="dropdown-item btn" href="/view/direitosHumanos/uda.php">Unidade de Atendimento</a>
                            <a class="dropdown-item btn" href="">Documentos</a>
                            <a class="dropdown-item btn" href="https://www.gov.br/cidadania/pt-br/noticias-e-conteudos/publicacoes-1/desenvolvimento-social">Publicações</a>
                        </div>
                    </li>

                    <!-- SEGURANÇA ALIMENTAR E NUTRICIONAL -->
                    <li class="nav-item dropdown border-primary" id="dropSegAlimNut">
                        <a class="nav-link dropdown-toggle" id="segAlimNut" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Segurança Alimentar e Nutricional
                        </a>
                        <div class="dropdown-menu" aria-labelledby="segAlimNut">
                            <a class="dropdown-item btn" href="/view/segAlimentarNutricional/sobre.php">O que é</a>
                            <a class="dropdown-item btn" href="/view/segAlimentarNutricional/uda.php">Unidade de Atendimento</a>
                            <a class="dropdown-item btn" href="">Documentos</a>
                            <a class="dropdown-item btn" href="https://www.gov.br/cidadania/pt-br/noticias-e-conteudos/publicacoes-1/desenvolvimento-social">Publicações</a>
                        </div>
                    </li>

                    <!-- ACESSO À INFORMAÇÃO -->
                    <li class="nav-item dropdown border-primary" id="dropAcessoInformacao">
                        <a class="nav-link dropdown-toggle" id="acessoInformacao" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Acesso à informação
                        </a>
                        <div class="dropdown-menu" aria-labelledby="acessoInformacao">
                            <a class="dropdown-item btn" href="https://www.americana.sp.gov.br/">Prefeitura de Americana</a>
                        </div>
                    </li>

                    <!-- CONSELHOS -->
                    <li class="nav-item dropdown border-primary">
                        <a class="nav-link rounded" href="https://www.americana.sp.gov.br/americanaV6_index.php?it=21&a=conselhos">
                            Orgãos de Controle Social (Conselhos)
                        </a>
                    </li>

                    <!-- FREQUENTLY QUESTION -->
                    <li class="nav-item dropdown border-primary" id="dropfrequentlyQuestion">
                        <a class="nav-link dropdown-toggle" id="frequentlyQuestion" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Perguntas Frequentes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="frequentlyQuestion">
                            <a class="dropdown-item btn" id="btnCad" href="/view/perguntasfrequentes/cad.php">Cadastro Único (CAD)</a>
                            <span class="dropdown-header font-small">Auxílio Emergencial (AE - Caixa)</span>
                            <a class="dropdown-item btn" href="/view/perguntasfrequentes/aeinformacoes.php">AE - Informações Gerais</a>
                            <a class="dropdown-item btn" href="/view/perguntasfrequentes/aecadastramento.php">AE - Cadastramento</a>
                            <a class="dropdown-item btn" href="/view/perguntasfrequentes/aeapp.php">AE - APP</a>
                            <a class="dropdown-item btn" href="/view/perguntasfrequentes/aeresultado.php">AE - Resultado da Avaliação do Cadastro</a>
                            <a class="dropdown-item btn" href="/view/perguntasfrequentes/aepagamento.php">AE - Pagamento do Benefício</a>
                            <a class="dropdown-item btn" x href="/view/perguntasfrequentes/aecasosespeciais.php">AE - Casos Especiais</a>
                        </div>
                    </li>

                    <!-- CONTATO -->
                    <li class="nav-item border-primary">
                        <a class="nav-link rounded" href="/view/contato.php">Contato</a>
                    </li>

                </ul>
            </div>


        </nav>
    </div>


    <!-- CONTENT -->
    <div class="container-fluid text-justify py-4">
        <div class="row justify-content-center">
            <div id="app" class="col-xl-8 col-12 bg-white">