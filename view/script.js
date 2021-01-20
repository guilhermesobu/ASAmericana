
// AQUI ESTÀ O EFEITO CONSTANTE DO NAVBAR
// PERGUNTAS FREQUENTES
if (window.innerWidth > 767) {
    var dropfrequentlyQuestion = document.querySelector('#dropfrequentlyQuestion');
    dropfrequentlyQuestion.addEventListener("mouseleave", () => {
        dropfrequentlyQuestion.click();
    });
    var frequentlyQuestion = document.querySelector('#frequentlyQuestion');
    frequentlyQuestion.addEventListener("mouseenter", () => {
        if (dropfrequentlyQuestion.classList[3] == undefined) {
            frequentlyQuestion.click();
        }
    });
}

//SERVIÇOS
/*if (window.innerWidth > 767) {
    var dropServices = document.querySelector('#dropServices');
    console.log('1');
    dropServices.addEventListener("mouseleave", () => {
        dropServices.click();
    });
    var services = document.querySelector('#services');
    services.addEventListener("mouseenter", () => {
        if (dropServices.classList[3] == undefined) {
            services.click();
        };
    });
}*/

//INSTITUCIONAL
if (window.innerWidth > 767) {
    var dropInstitutional = document.querySelector('#dropInstitutional');
    console.log('1');
    dropInstitutional.addEventListener("mouseleave", () => {
        dropInstitutional.click();
    });
    var institutional = document.querySelector('#institutional');
    institutional.addEventListener("mouseenter", () => {
        if (dropInstitutional.classList[3] == undefined) {
            institutional.click();
        };
    });
}

//ASSISTENCIA SOCIAL
if (window.innerWidth > 767) {
    var dropSocialAssistance = document.querySelector('#dropSocialAssistance');
    console.log('1');
    dropSocialAssistance.addEventListener("mouseleave", () => {
        dropSocialAssistance.click();
    });
    var socialAssistance = document.querySelector('#socialAssistance');
    socialAssistance.addEventListener("mouseenter", () => {
        if (dropSocialAssistance.classList[3] == undefined) {
            socialAssistance.click();
        };
    });
}

//SEGURANÇA ALIMENTAR E NUTICIONAL
if (window.innerWidth > 767) {
    var dropSegAlimNut = document.querySelector('#dropSegAlimNut');
    console.log('1');
    dropSegAlimNut.addEventListener("mouseleave", () => {
        dropSegAlimNut.click();
    });
    var segAlimNut = document.querySelector('#segAlimNut');
    segAlimNut.addEventListener("mouseenter", () => {
        if (dropSegAlimNut.classList[3] == undefined) {
            segAlimNut.click();
        };
    });
}

//DIREITOS HUMANOS
if (window.innerWidth > 767) {
    var dropDirHumano = document.querySelector('#dropDirHumano');
    console.log('1');
    dropDirHumano.addEventListener("mouseleave", () => {
        dropDirHumano.click();
    });
    var dirHumano = document.querySelector('#dirHumano');
    dirHumano.addEventListener("mouseenter", () => {
        if (dropDirHumano.classList[3] == undefined) {
            dirHumano.click();
        };
    });
}

// ACESSO À INFORMAÇÃO
if (window.innerWidth > 767) {
    var dropAcessoInformacao = document.querySelector('#dropAcessoInformacao');
    console.log('1');
    dropAcessoInformacao.addEventListener("mouseleave", () => {
        dropAcessoInformacao.click();
    });
    var acessoInformacao = document.querySelector('#acessoInformacao');
    acessoInformacao.addEventListener("mouseenter", () => {
        if (dropAcessoInformacao.classList[3] == undefined) {
            acessoInformacao.click();
        };
    });
}

// AQUI ESTÁ A ABERTURA DE NOVA ABA AO CLICAR NO PMAS
var pmas = document.querySelector('#btnPmas');
pmas.addEventListener('click', () => {
    window.open('https://www.americana.sp.gov.br/download/cmas/diversos/pmas-2018-2021.pdf', 'PMAS');
})