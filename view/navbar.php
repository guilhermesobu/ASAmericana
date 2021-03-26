<div class="row-fluid border-bottom border-primary">
    <nav class="navbar <?php //navbar-expand-xl 
                        ?> navbar-light bg-white border-primary border-bottom">
        <a class="border rounded px-1 py-0 navbar-brand text-white bg-primary" href="/"><strong>SASDH</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav d-flex justify-content-around py-3">

                <!-- INSTITUCIONAL -->
                <li class="nav-item dropdown border-primary" id="dropInstitutional">
                    <a class="nav-link dropdown-toggle" id="institutional" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Institucional
                    </a>
                    <div class="dropdown-menu" aria-labelledby="institutional">

                        <!--<a class="dropdown-item btn" href="" >Estrutura Organizacional</a>-->
                        <a class="dropdown-item dropdown-toggle btn" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Estrutura Organizacional<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>X</li>
                            <li>Y</li>
                        </ul>

                        <a class="dropdown-item btn" href="" hidden>Composição</a>
                        <a class="dropdown-item btn" href="">Base Jurídica</a>
                        <a class="dropdown-item btn" href="">Plano Estratégico</a>
                        <a class="dropdown-item btn" href="/view/institucional/historico.php">História da SASDH</a>
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
                        <a class="dropdown-item btn" href="" hidden>Documentos</a>
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
                        <a class="dropdown-item btn" href="" hidden>Documentos</a>
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
                        <a class="dropdown-item btn" href="" hidden>Documentos</a>
                    </div>
                </li>

                <!-- CONSELHO TUTELAR -->
                <li class="nav-item dropdown border-primary">
                    <a class="nav-link rounded" href="/view/direitosHumanos/uda.php">
                        Conselho Tutelar
                    </a>
                </li>

                <!-- ORGÃOS DE CONTROLE SOCIAL -->
                <li class="nav-item dropdown border-primary">
                    <a class="nav-link rounded" href="">
                        Órgãos de Controle Social
                    </a>
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

                <!-- CONSELHOS 
                    <li class="nav-item dropdown border-primary">
                        <a class="nav-link rounded" href="https://www.americana.sp.gov.br/americanaV6_index.php?it=21&a=conselhos">
                            Orgãos de Controle Social (Conselhos Municipais)
                        </a>
                    </li> -->

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

                <!-- PUBLICAÇÕES -->
                <li class="nav-item border-primary">
                    <a class="nav-link rounded" href="/view/publicacoes.php">Publicações e Conteúdos</a>
                </li>

            </ul>
        </div>

    </nav>

    <?php include "fastAccess.php" ?>

</div>