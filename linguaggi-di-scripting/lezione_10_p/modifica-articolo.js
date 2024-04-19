///funzione per recuperare da query string i dati


document.addEventListener('DOMContentLoaded', (event) => {
    const urlSearchParams = new URLSearchParams(window.location.search);
    const params = Object.fromEntries(urlSearchParams.entries());
    recuperaArticolo(params.postId);
});


let btnCarica = document.getElementById("btnCarica");
btnCarica.onclick = function () {
    let postId = document.getElementById("postId").value;
    let post = {};
    post.title = document.getElementById("titolo").value;
    post.body = document.getElementById("testo").value;
    let client = new XMLHttpRequest();
    client.open("PUT", "https://jsonplaceholder.typicode.com/posts/" + postId); //REST API
    client.send(JSON.stringify(post)); //Inviato la richiesta al server
    client.onload = function () {
        if (client.status === 200) {
            // Chiama con risposta
            aggiornaAreaMessaggio();
            window.location.replace("lista-articoli.html");
        } else {
            // chiamata quando ci sono degli errori
            aggiornaAreaMessaggio(client.statusText, "alert-danger");
        }
    }
}


function recuperaArticolo(postId) {
    let client = new XMLHttpRequest();
    client.open("GET", "https://jsonplaceholder.typicode.com/posts/" + postId); //REST API
    client.responseType = "json";
    client.send(); //Inviato la richiesta al server
    client.onload = function () {
        if (client.status === 200) {
            // Chiama con risposta
            aggiornaAreaMessaggio();
            aggiornFormModificaArticolo(client.response);
        } else {
            // chiamata quando ci sono degli errori
            aggiornaAreaMessaggio(client.statusText, "alert-danger");
        }
    }
}

function aggiornFormModificaArticolo(articolo) {
    document.getElementById("postId").value = articolo.id;
    document.getElementById("titolo").value = articolo.title;
    document.getElementById("testo").value = articolo.body;
}
