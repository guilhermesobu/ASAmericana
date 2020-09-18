//Para preencher os itens do conteúdo do lado direito
var rightContent = document.querySelector('#rc');
var myRc = [
    {
        'href': 'https://www.americana.sp.gov.br/',
        'src': 'https://asamericana.com.br/src/brasao_americana.png', 
        'text': 'Prefeitura de Americana',
        'alt': 'Brasão da Prefeitura de Americana'
    },
    {
        'href': 'https://www.americana.sp.gov.br/',
        'src': 'https://asamericana.com.br/src/brasao_americana.png', 
        'text': 'Prefeitura de Americana',
        'alt': 'Brasão da Prefeitura de Americana'
    },
    {
        'href': 'https://www.americana.sp.gov.br/',
        'src': 'https://asamericana.com.br/src/brasao_americana.png', 
        'text': 'Prefeitura de Americana',
        'alt': 'Brasão da Prefeitura de Americana'
    },
];

function renderRc(html, obj){
    var myHtml = html,
        myObj = obj; 
        
    //Para a tela MAIOR
    if(window.innerWidth >= 768){   
        myHtml.innerHTML = myObj.map((item, index) => {
            if(index == 0){
                return `
                <div class="row h-100 pl-4 py-4 border-left border-primary">
                    <div class="row-fluid border rounded-pill py-4" style="width: 18rem;">
                        <a href="${item.href}">
                            <img src="${item.src}" class="mx-auto d-block" style="width: 90px; height: 90px;" alt="${item.alt}">
                            <p style="font-size: 8px;" class="text-center">${item.text}</p>
                        </a>
                `
            }
            else if(index == myObj.length - 1){
                return `
                            <a href="${item.href}">
                                <img src="${item.src}" class="mx-auto d-block" style="width: 90px; height: 90px;" alt="${item.alt}">
                                <p style="font-size: 8px;" class="text-center">${item.text}</p>
                            </a>
                        </div>
                    </div>
                `
            } else {
                return `
                    <a href="${item.href}">
                        <img src="${item.src}" class="mx-auto d-block" style="width: 90px; height: 90px;" alt="${item.alt}">
                        <p style="font-size: 8px;" class="text-center">${item.text}</p>
                    </a>
                `
            }
        }).join('');
    } 

    //Para a tela MENOR
    else {                        
        myHtml.innerHTML = myObj.map((item, index) => {
            if(index == 0){
                return `
                <div class="container-fluid border-top border-primary p-4">
                    <div class="row border rounded-pill py-4">
                        <a class="col" href="${item.href}">
                            <img src="${item.src}" class="mx-auto d-block" style="width: 90px; height: 90px;" alt="${item.alt}">
                            <p style="font-size: 8px;" class="text-center">${item.text}</p>
                        </a>
                `
            }
            else if(index == myObj.length - 1){
                return `
                            <a class="col" href="${item.href}">
                                <img src="${item.src}" class="mx-auto d-block" style="width: 90px; height: 90px;" alt="${item.alt}">
                                <p style="font-size: 8px;" class="text-center">${item.text}</p>
                            </a>
                        </div>
                    </div>
                `
            } else {
                return `
                    <a class="col" href="${item.href}">
                        <img src="${item.src}" class="mx-auto d-block" style="width: 90px; height: 90px;" alt="${item.alt}">
                        <p style="font-size: 8px;" class="text-center">${item.text}</p>
                    </a>
                `
            }
        }).join('');
    }
}

window.onresize = renderRc(this.rightContent, this.myRc);

