//Renderizar o conteúdo de Dúvidas Frequentes

function renderFQ(title, php, obj) {
    var indexphp = php;
    var myObj = obj;
    
    indexphp.innerHTML = myObj.map((item, index) => {

        var topOfThePage = `
        <div class="container shadow py-2 rounded">
            <div class="row-fluid col-12 py-2">
                <strong>
                    <h3 class="col-12 pt-1 pb-0">Perguntas Frequêntes</h3>
                    <p class="pl-3">
                        ${title}
                    </p>
                </strong>
            </div>
        `;

        var dropdown = `
            <div class="card rounded mb-1 border border-primary">
                <div class="p-0 card-header" id="headingOne">
                    <h1 class="mb-0">
                        <button class="bg-primary rounded-0 font-large btn btn-block text-left px-4" type="button" data-toggle="collapse" data-target="#collapse${index}" aria-expanded="true" aria-controls="collapse${index}">
                        <strong class="text-white">${index + 1}) ${item.title}</strong>
                        </button>
                    </h1>
                </div>
        
                <div id="collapse${index}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body px-4 pt-3 pb-0">
                        ${item.description}
                    </div>
                </div>
            </div>
        `;

        if (index == 0) {
            return `
            ${topOfThePage}
            <div class="row-fluid">
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
