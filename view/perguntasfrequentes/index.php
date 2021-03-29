<!-- HISTORICO -->
<?php
include '../defaultTop.php';
?>

<div class="container shadow rounded">

    <nav aria-label="breadcrumb" class="pt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Perguntas Frequentes</li>
        </ol>
    </nav>

    <div class="row-fluid p-4">
        <h4 class="text-primary">Opss... Não temos nenhum conteúdo aqui!</h4>
        <p class="pt-4">Por acavo você está procurando por...</p>
        <form action="/view/perguntasfrequentes/faq.php" method="POST">
            <button type="submit" class="dropdown-item btn text-primary" name="id" value="1">Cadastro Único (CAD)</button>
            <span class="dropdown-header font-small">Auxílio Emergencial (AE - Caixa)</span>
            <button type="submit" class="dropdown-item btn text-primary" name="id" value="2">AE - Informações Gerais</button>
            <button type="submit" class="dropdown-item btn text-primary" name="id" value="3">AE - Cadastramento</button>
            <button type="submit" class="dropdown-item btn text-primary" name="id" value="4">AE - APP</button>
            <button type="submit" class="dropdown-item btn text-primary" name="id" value="5">AE - Resultado da Avaliação do Cadastro</button>
            <button type="submit" class="dropdown-item btn text-primary" name="id" value="6">AE - Pagamento do Benefício</button>
            <button type="submit" class="dropdown-item btn text-primary" name="id" value="7">AE - Casos Especiais</button>
        </form>

    </div>

</div>

<?php
include '../defaultBotton.php';
?>