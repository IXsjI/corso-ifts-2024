function recuperaListaImmagini() {
    let immagine = new XMLHttpRequest();
    immagine.open("GET", "https://jsonplaceholder.typicode.com/photos");
    immagine.responseType = "json";
    immagine.send();
    immagine.onload = function () {
        if (immagine.status === 200){
            // Chiama con risposta
            aggiornaCarosello(immagine.response);
        } else{
            // chiamata quando ci sono degli errori
            aggiornaAreaMessaggio(immagine.statusText);
        }
    }
}

function aggiornaAreaMessaggio(msg = "Operazione completa.") {
    let divMessaggi = document.getElementById("messaggi");
    divMessaggi.innerHTML = ""; //cancello eventuali messaggi
    divMessaggi.innerHTML = "<div class=\"alert alert-success\">" + msg + "</div>";
}

function aggiornaCarosello(listaPhotos){
    let divListaImmagini = document.getElementById("listaImmagini");
    for (let index = 0; index < 10; index++) {
        const photo = listaPhotos[index];
        let img;
        if (index === 0) {
            img = creaImmagine("", photo.thumbnailUrl, photo.title);
        } else {
            img = creaImmagine("d-none", photo.thumbnailUrl, photo.title);
        }
        divListaImmagini.append(img);
    }
}

function creaImmagine(classCssImg, url, title) {
    let immagine = document.createElement("img");
    immagine.src = url;
    immagine.alt = title;
    immagine.className = classCssImg;
    return immagine;
}