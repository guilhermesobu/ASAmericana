/* ALTO CONTRASTE */
var altoContraste = document.getElementsByTagName("head");
var buttonAC = document.getElementById("altoContrasteID");
buttonAC.addEventListener('click', () => {
    if (document.getElementById('altocontraste')) {
        $("[id='altocontraste']").remove();
    } else {
        document.head.insertAdjacentHTML("beforeend", "<link rel='stylesheet' href='/v1/scss/altocontraste.css' id='altocontraste'>");
    }
});
/* ALTO CONTRASTE */

/* SUBLINHADO */
var sublinhado = document.getElementById('sublinhadoID').addEventListener('click', () => {
    var documento = document.body.getElementsByTagName('a');
    if (documento[0].style.textDecoration != "underline") {
        for (var i = 0; i < documento.length; i++) {
            documento[i].style.textDecoration = "underline";
        }
    } else {
        for (var i = 0; i < documento.length; i++) {
            documento[i].style.textDecoration = "none";
        }
    }
})
/* SUBLINHADO */

/* AUMENTAR E DIMINUIR TAMANHO DO TEXTO */
var tamanho = 16;
var brnAumentar = document.getElementById('aumentarFonteID').addEventListener('click', () => {
    if (tamanho < 22) {
        tamanho++;
        document.body.style.fontSize = tamanho + "px";
    }
})
var btnDiminuir = document.getElementById('diminuirFonteID').addEventListener('click', () => {
    if (tamanho > 10) {
        tamanho--;
        document.body.style.fontSize = tamanho + "px";
    }
});
/* AUMENTAR E DIMINUIR TAMANHO DO TEXTO */
