//Para preencher os itens do conteúdo do lado direito
var rightContent = document.querySelector('#rc');
var myRc = [
    {
        'href': 'https://transparencia.americana.sp.gov.br/transparencia_index.php',
        'src': '/src/img/banner_portal_transparencia.jpg',
        'text': 'Portal da Transparência',
        'alt': 'Icone do portal da transparência'
    },
    {
        'href': 'https://americana.1doc.com.br/b.php?pg=o/wp&s=americana',
        'src': '/src/img/banner-protocolo-digital.png',
        'text': 'Protocolo Digital',
        'alt': 'Icone protocolo digital'
    },
    {
        'href': 'https://esic.americana.sp.gov.br/esic_index.php',
        'src': '/src/img/banner-sic-3.jpg',
        'text': 'SIC',
        'alt': 'SIC'
    },
    {
        'href': '/view/mrosc.php',
        'src': '/src/img/MROSC.png',
        'text': 'MROSC',
        'alt': 'MROSC'
    },
];

function renderRc(html, obj) {
    var myHtml = html,
        myObj = obj;


    myHtml.innerHTML = myObj.map((item, index) => {
        if (index == 0) {
            return `
            <div class="container">
                <div class="d-lg-block d-xl-none mt-3"></div> <!-- Essa linha só serve para dar MT-4 -->

                <div class="row justify-content-center">
                    <h5>Principais Links</h5>
                </div>
                <div class="row border rounded border-primary p-2 bg-white shadow">
                    <div class="col-xl-12 col pt-3">
                        <a href="${item.href}">
                            <img src="${item.src}" alt="${item.alt}" class="mx-auto d-block" style="width: 90px; height: 90px;">
                            <!-- <p style="font-size: 8px;" class="text-center">${item.text}</p> -->
                        </a>
                    </div>
                
            `
        } else if (index == myObj.length - 1) {
            return `
                        <div class="col-xl-12 col py-3">
                            <a href="${item.href}">
                                <img src="${item.src}" alt="${item.alt}" class="mx-auto d-block" style="width: 90px; height: 90px;">
                                <!-- <p style="font-size: 8px;" class="text-center">${item.text}</p> -->
                            </a>
                        </div>
                    </div>
                </div>
            `
        } else {
            return `
                <div class="col-xl-12 col pt-3">
                    <a href="${item.href}">
                        <img src="${item.src}" alt="${item.alt}" class="mx-auto d-block" style="width: 90px; height: 90px;">
                        <!-- <p style="font-size: 8px;" class="text-center">${item.text}</p> -->
                    </a>
                </div>
            `
        }
    }).join('');

}

renderRc(this.rightContent, this.myRc);

