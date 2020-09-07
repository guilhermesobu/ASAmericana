//renderizar a parte de cima da Página
var myTop = document.querySelector('#top');

var topContent = `
<div class="row-fluid">
    <h3 class="col-12 pt-4">Secretaria de Assistência Social e Direitos Humanos</h3>
</div>
   
<nav class="navbar navbar-expand-lg navbar-light bg-dark rounded">
    <a class="navbar-brand text-white" href="#">SASDH</a>
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
          <a class="dropdown-item btn" id="btnAe">Auxílio Emergencial (Caixa)</a>
        </div>
      </li>
        </ul>
    </div>
 </nav>
`;

myTop.innerHTML = topContent;