function recuperaListaFoto() {
    let foto = new XMLHttpRequest();
    foto.open("GET", "https://jsonplaceholder.typicode.com/photos");
    foto.responseType = "json";
    foto.send();
    foto.onload = function () {
        if (foto.status === 200){
            // Chiama con risposta
            aggiornaSliderFoto(foto.response);
        } else{
            // chiamata quando ci sono degli errori
            aggiornaAreaMessaggio(foto.statusText);
        }
    }
}

function aggiornaAreaMessaggio(msg = "Operazione completa.") {
    let divMessaggi = document.getElementById("messaggi");
    divMessaggi.innerHTML = ""; //cancello eventuali messaggi
    divMessaggi.innerHTML = "<div class=\"alert alert-success\">" + msg + "</div>";
}

function aggiornaSliderFoto(listaFoto) {
    let divCarousel = document.getElementById("carousel");

    for (let index = 0; index < 10; index++) {
        const foto = listaFoto[index];
        let elementCarousel = document.createElement("div");
        elementCarousel.className = "carousel-item";
        if (index === 0) {
            elementCarousel.className = "carousel-item active";
        }
        let imgCarousel = document.createElement("img");
        imgCarousel.className = "d-block w-100";
        imgCarousel.setAttribute("src", foto.thumbnailUrl);

        elementCarousel.append(imgCarousel);
        divCarousel.append(elementCarousel);
        
    }
}