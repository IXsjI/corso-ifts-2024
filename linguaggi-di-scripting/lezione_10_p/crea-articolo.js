let btnCarica = document.getElementById("btnCarica");
btnCarica.onclick = function () {
    let divFormArticolo = document.getElementById("articolo-form");
    let divLoading = document.getElementById("loading");

    divFormArticolo.className = "d-none";
    divLoading.className = "";

    let post = {};
    post.title = document.getElementById("titolo").value;
    post.body = document.getElementById("testo").value;
    let client = new XMLHttpRequest();
    client.open("POST", "https://jsonplaceholder.typicode.com/posts"); //REST API
    client.send(JSON.stringify(post)); //Inviato la richiesta al server
    client.onload = function () {
        if (client.status === 201) {
            // Chiama con risposta
            aggiornaAreaMessaggio();
            window.location.replace("lista-articoli.html");
        } else {
            // chiamata quando ci sono degli errori
            aggiornaAreaMessaggio(client.statusText, "alert-danger");
            divFormArticolo.className = "";
            divLoading.className = "d-none";
        }
    }
}