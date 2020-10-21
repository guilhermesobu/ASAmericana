
// AQUI ESTÀ O EFEITO CONSTANTE DO NAVBAR
var dropfrequentlyQuestion = document.querySelector('#dropfrequentlyQuestion');
dropfrequentlyQuestion.addEventListener("mouseleave", function () {
    dropfrequentlyQuestion.click();

});

var frequentlyQuestion = document.querySelector('#frequentlyQuestion');
frequentlyQuestion.addEventListener("mouseenter", function () {
    if (dropfrequentlyQuestion.classList[3] == undefined) {
        frequentlyQuestion.click();
    }
});


var dropServices = document.querySelector('#dropServices');
dropServices.addEventListener("mouseleave", function () {
    dropServices.click();
});

var services = document.querySelector('#services');
services.addEventListener("mouseenter", function () {
    if (dropServices.classList[3] == undefined) {
        services.click();
    };
});

// AQUI ESTÁ A ABERTURA DE NOVA ABA AO CLICAR NO PMAS
var pmas = document.querySelector('#btnPmas');
pmas.addEventListener('click', function(){
    window.open('https://www.americana.sp.gov.br/download/cmas/diversos/pmas-2018-2021.pdf');
})