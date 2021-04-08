<!-- REDE PÚBLICA -->
<?php
include '../../defaultTop.php';
?>

<div class="container shadow rounded">

    <nav aria-label="breadcrumb" class="pt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/view/assistenciaSocial">Assistência Social</a></li>
            <li class="breadcrumb-item"><a href="/view/assistenciaSocial/uda.php">Unidade de Atendimento</a></li>
            <li class="breadcrumb-item active" aria-current="page">Casa dos Conselhos</li>
        </ol>
    </nav>

    <div class="row-fluid p-4">

        <h3 class="text-left">Conselhos Municipais</h3>

        <!-- ESPECIAL - CREAS -->
        <div>

            <h4 class="pt-4 text-primary">Casa dos Conselhos</h4>
            <p class="mb-0">Os Conselhos de Americana são:</p>
            <ul>
                <li>Conselho Municipal de Assistência Social (CMAS)</li>
                <li>Conselho Municipal dos Direitos da Criança e Adolescente (CMDCA)</li>
                <li>Conselho Municipal do Idoso (COMID)</li>
                <li><strong>NÃO ENCONTREI ESSE</strong> ------ Conselho Municipal da Pessoa com Deficiência (CMDPD)</li>
                <li>Conselho Municipal dos Direitos da Mulher (CMDM)</li>
                <li>Conselho Municipal de Segurança Alimentar (COMSEA)</li>
                <li>Conselho Municipal de Políticas Públicas sobre Álcool e Outras Drogas (COMAD)</li>
            </ul>

            <div class="px-4 pt-2 pb-3" id="addressServices">
                <div class="row">
                    <address class="col-12">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <strong>Casa dos Conselhos</strong><br>
                                Rua Ibirapuera, 70 - Jardim Ipiranga<br>
                                Telefone: (19) 3407-8448<br>
                                <!--E-mails: <br>
                                <a class="text-primary pb-0">cmas@americana.sp.gov.br</a> - CMAS<br>
                                <a class="text-primary pb-0">cmdca@americana.sp.gov.br</a><br>
                                <a class="text-primary pb-0">comid@americana.sp.gov.br</a><br>
                                <a class="text-primary pb-0">cmdm@americana.sp.gov.br</a><br>
                                <a class="text-primary pb-0">comad@americana.sp.gov.br</a><br>
                                <a class="text-primary pb-0">cmas@americana.sp.gov.br</a><br>-->
                            </div>
                            <div class="col align-self-center text-center">
                                <a href="https://goo.gl/maps/LMiXdC18HBWssys76"><img src="/src/icons/Local-Circle.png" id="common-icons" alt="Localização"></a>
                            </div>
                        </div>
                    </address>
                </div>


                <div class="row-fluid d-flex justify-content-around">
                    <!-- CMAS -->
                    <a class="btn border-primary" data-toggle="collapse" href="#collapseCMAS" role="button" aria-expanded="false" aria-controls="collapseCMAS">
                        <img class="image-icon" src="/src/img/conselhos/logo-cmas.jpg"><br>
                        <span>CMAS</span>
                    </a>
                    <!-- CMDCA -->
                    <a class="btn border-primary" data-toggle="collapse" href="#collapseCMDCA" role="button" aria-expanded="false" aria-controls="collapseCMDCA">
                        <img class="image-icon" src="/src/img/conselhos/logo-cmdca.jpg"><br>
                        <span>CMDCA</span>
                    </a>
                    <!-- COMID -->
                    <a class="btn border-primary" data-toggle="collapse" href="#collapseCOMID" role="button" aria-expanded="false" aria-controls="collapseCOMID">
                        <img class="image-icon" src="/src/img/conselhos/logo-comid.jpg"><br>
                        <span>COMID</span>
                    </a>
                    <!-- CMDM -->
                    <a class="btn border-primary" data-toggle="collapse" href="#collapseCMDM" role="button" aria-expanded="false" aria-controls="collapseCMDM">
                        <img class="image-icon" src="/src/img/conselhos/logo-cmdm.jpg"><br>
                        <span>CMDM</span>
                    </a>
                    <!-- COMID -->
                    <a class="btn border-primary" data-toggle="collapse" href="#collapseCOMSEA" role="button" aria-expanded="false" aria-controls="collapseCOMSEA">
                        <img class="image-icon" src="/src/img/conselhos/logo-comsea.jpg"><br>
                        <span>COSMEA</span>
                    </a>
                    <!-- COMAD -->
                    <a class="btn border-primary" data-toggle="collapse" href="#collapseCOMAD" role="button" aria-expanded="false" aria-controls="collapseCOMAD">
                        <img class="image-icon" src="/src/img/conselhos/logo-comad.jpg"><br>
                        <span>COMAD</span>
                    </a>
                </div>

                <div class="row-fluid pt-2">

                    <?php
                    include 'cmas.php';
                    ?>

                </div>






            </div>
        </div>



    </div>
</div>
<?php
include '../../defaultBotton.php';
?>