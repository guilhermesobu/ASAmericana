<?php include 'defaultTop.php'; ?>

<div class="p-3 mb-4 shadow rounded">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Desenvolvedores</li>
        </ol>
    </nav>

    <div class="mt-5 mx-3">
        <div class="row-fluid pb-4 px-4">
            <div class="row">

                <div class="col-12">
                    <h3>Equipe que permitiu que a publicação dessa página fosse possível</h3>
                </div>

                <div class="col-12 pt-4">
                    <p>Foi dado início ao desenvolvimento do site da Secretaria de Assistência Social e Direitos Humanos em Outubro de 2020 e sua inalguração realizada no dia 10 de Abril de 2021.</p>
                </div>

                <div hidden class="col-12 pt-4">
                    <h4 class="text-primary">Secretário(a)</h4>
                    <p><strong>Ailton Gonçalves Dias</strong>, formação em Teologia, execeu função entre 2017 - 2020.</p>
                    <p><strong>Juliani</strong>, formação em Direito, iniciou em 2021.</p>
                </div>

                <div class="col-12 pt-4">
                    <h4 class="text-primary">Diretor(a)</h4>
                    <p><strong>Beatriz</strong>, formação em Psicologia, cargo público de Psicologia desde ..., iniciou sua função como diretora em 2018.</p>
                </div>

                <div class="col-12 pt-4">
                    <h4 class="text-primary">Produtores(as) de conteúdo</h4>
                    <p><strong>Alcimara</strong>, formação em Serviço Social, cargo público de Assistência Social desde ...., atualmente atua como Coordenadora do Departamento de Assessoramento e Defesa de Direitos Humanos e Socioassistenciais.</p>
                    <p><strong>Maine</strong>, formação em Gerontologia e Psicologia, cargo público de Gerontôloga desde ..., atuando no setor de Ações Intersetoriais de Assessoramento e Defesa de Direitos de Pessoas com Deficiência e Idosas.</p>
                    <p><strong>Marilza</strong>, formação em ... cargo público de .... desde ...., atuando no setor de Gestão do Trabalho e Educação Permanente.</p>
                    <p><strong>Thais</strong>, formação em Serviço Social, cargo público de Assistência Social desde 2011, atualmente atua como Coordenadora do Departamento de Gestão Estratégica, Planejamento, Monitoramento e Avaliação.</p>
                </div>

                <div class="col-12 pt-4">
                    <h4 class="text-primary">Programador(a)</h4>
                    <p><strong>Guilherme de Souza Bueno</strong>, formação em Análise e Desenvolvimento de Sistemas, cargo público de Escriturário desde 2013, atuando no setor de Gestão da Informação.</p>
                </div>

            </div>
        </div>
    </div>



</div>

</div>

</div>

<!-- aqui termina a DIV de CONTENT -->
</div>

<!-- FOOTER -->
<div class="container-fluid py-4 m-0 bg-texture">
    <div class="row d-flex justify-content-around align-items-center text-white">

        <div class="col-md-3 col-sm-12 text-center mx-4 my-1 py-4">
            <img class="rounded-circle bg-white py-2 px-3" src="/src/img/brasao_americana.png">
        </div>

        <div class="col-md col-sm-6 my-1 py-4">
            <address class="text-center m-0" style="font-size: 12px;">
                <strong>SECRETARIA DE ASSISTÊNCIA SOCIAL E DIREITOS HUMANOS</strong><BR>
                Rua das Poncianas, nº 1225 - Jardim Glória<BR>
                CEP: 13468-180<BR>
                Telefone: (19) 3471-6770<BR>
                E-mail: <a class="rounded-pill bg-white px-2">acaosocial@americana.sp.gov.br</a><BR>
                Horário de atendimento: 9h às 16h<BR>
            </address>
        </div>

        <div class="col-md-3 col-sm-6 mx-4 my-1 py-4">
            <address class="text-center m-0" style="font-size: 12px;">
                <strong>PAÇO MUNICIPAL</strong><BR>
                Avenida Brasil, nº 85 - Centro<BR>
                CEP: 13465-901<BR>
                Telefone: (19) 3475-9000<BR>
                E-mail (SAC) : <a class="rounded-pill bg-white px-2">sac@americana.sp.gov.br</a><BR>
                Horário de atendimento: 9h às 16h<BR>
            </address>
        </div>

    </div>

    <?php
    require 'copyright.php';
    ?>

</div>

<script src="/view/script.js?<?php echo time(); ?>"></script>
<script src="/view/scriptRC.js?<?php echo time(); ?>"></script>
<script src="/bootstrap/js/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="/bootstrap/js/popper.min.js" crossorigin="anonymous"></script>
<script src="/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>