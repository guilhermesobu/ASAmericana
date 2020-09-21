//Para preencher os itens do conteúdo do lado direito
var rightContent = document.querySelector('#rc');
var myRc = [
    {
        'href': 'https://www.americana.sp.gov.br/',
        'src': 'src/brasao_americana.png', 
        'text': 'Prefeitura de Americana',
        'alt': 'Brasão da Prefeitura de Americana'
    },
    {
        'href': 'https://www.americana.sp.gov.br/',
        'src': 'src/brasao_americana.png', 
        'text': 'Prefeitura de Americana',
        'alt': 'Brasão da Prefeitura de Americana'
    },
    {
        'href': 'https://www.americana.sp.gov.br/',
        'src': 'src/brasao_americana.png', 
        'text': 'Prefeitura de Americana',
        'alt': 'Brasão da Prefeitura de Americana'
    },
];

function renderRc(html, obj){
    var myHtml = html,
        myObj = obj; 
        

    myHtml.innerHTML = myObj.map((item, index) => {
        if(index == 0){
            return `
            
                <div class="row border rounded border-primary p-2 bg-white">
                    <div class="col-md-12 col pt-3">
                        <a href="${item.href}">
                            <img src="${item.src}" alt="${item.alt}" class="mx-auto d-block" style="width: 90px; height: 90px;">
                            <p style="font-size: 8px;" class="text-center">${item.text}</p
                        </a>
                    </div>
                
            `
        } else if (index == myObj.length - 1){
            return `
                    <div class="col-md-12 col pt-3">
                        <a href="${item.href}">
                            <img src="${item.src}" alt="${item.alt}" class="mx-auto d-block" style="width: 90px; height: 90px;">
                            <p style="font-size: 8px;" class="text-center">${item.text}</p
                        </a>
                    </div>
                </div>
            `
        } else {
            return `
                <div class="col-md-12 col pt-3">
                    <a href="${item.href}">
                        <img src="${item.src}" alt="${item.alt}" class="mx-auto d-block" style="width: 90px; height: 90px;">
                        <p style="font-size: 8px;" class="text-center">${item.text}</p
                    </a>
                </div>
            `
        }
    }).join('');

}

renderRc(this.rightContent, this.myRc);

