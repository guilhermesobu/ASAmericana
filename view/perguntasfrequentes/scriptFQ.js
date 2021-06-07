var myFrequentlyQuestions = document.querySelector('#app');


if(document.URL.match('/perguntasfrequentes/cad.php')){
    renderFQ("Cadastro Único (CAD)", this.myFrequentlyQuestions ,this.myCadContent);
}

if(document.URL.match('/perguntasfrequentes/aeinformacoes.php')){
    renderFQ("AE - Informações Gerais", this.myFrequentlyQuestions ,this.myAeContentIg);
}

if(document.URL.match('/perguntasfrequentes/aecadastramento.php')){
    renderFQ("AE - Cadastramento", this.myFrequentlyQuestions ,this.myAeContentCa);
}

if(document.URL.match('/perguntasfrequentes/aeapp.php')){
    renderFQ("AE - APP", this.myFrequentlyQuestions ,this.myAeContentAp);
}

if(document.URL.match('/perguntasfrequentes/aeresultado.php')){
    renderFQ("AE - Resultado da Avaliação do Cadastro", this.myFrequentlyQuestions ,this.myAeContentRa);
}

if(document.URL.match('/perguntasfrequentes/aepagamento.php')){
    renderFQ("AE - Pagamento do Benefício", this.myFrequentlyQuestions ,this.myAeContentPb);
}

if(document.URL.match('/perguntasfrequentes/aecasosespeciais.php')){
    renderFQ("AE - Casos Especiais", this.myFrequentlyQuestions ,this.myAeContentCe);
}