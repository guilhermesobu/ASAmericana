//Renderizar o conteúdo de Dúvidas Frequentes

function renderFQ(title, php, obj) {
    var indexphp = php;
    var myObj = obj;
    
    indexphp.innerHTML = myObj.map((item, index) => {

        var topOfThePage = `
        <div class="container shadow py-3 rounded">
            <div class="row-fluid col-12 bg-primary rounded-top pt-4 pb-3 text-white">
                <strong>
                    <h3 class="col-12 pt-1 pb-0 webkit">Perguntas Frequêntes</h3>
                    <p class="pl-3">
                        ${title}
                    </p>
                </strong>
            </div>
        `;

        var dropdown = `
            <div class="card border-primary rounded-0 border-top-0 border">
                <div class="p-0 card-header" id="headingOne">
                    <h1 class="mb-0">
                        <button class="rounded-0 font-large btn btn-block text-left pl-4" type="button" data-toggle="collapse" data-target="#collapse${index}" aria-expanded="true" aria-controls="collapse${index}">
                        <strong>${index + 1}) ${item.title}</strong>
                        </button>
                    </h1>
                </div>
        
                <div id="collapse${index}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <span>${item.description}</span>
                    </div>
                </div>
            </div>
        `;

        if (index == 0) {
            return `
            ${topOfThePage}
            <div class=row-fluid>
            <div class="accordion" id="accordionExample">${dropdown}`;
        }
        else if (index == myObj.length - 1) {
            return `${dropdown}
                    </div>
                </div>
            </div><br>
            `;
        }
        else {
            return `${dropdown}`;
        }

    }).join('');

}
