let btnCarica = document.getElementById("btnCarica");
btnCarica.onclick = function () {
    cancellaMessaggio();
    let divListaArticoli = document.getElementById("articoli");
    divListaArticoli.className = "d-none";
    let divLoading = document.getElementById("loading");
    divLoading.className = "";
    setTimeout(function () {
        recuperaArticoli();
    }, 2000);

}

recuperaArticoli()
    .then(posts => {
        setTimeout(function () {
            aggiornaAreaMessaggio();
            aggiornaTabellaArticoli(posts);
        }, 2000);
    })
    .catch(error => {
        aggiornaAreaMessaggio(error.message, "alert-danger");
    });

function recuperaArticoli() {
    let promessa = new Promise((resolve, reject) => {
        let client = new XMLHttpRequest();
        client.open("GET", "https://jsonplaceholder.typicode.com/posts"); //REST API
        client.responseType = "json";
        client.send(); //Inviato la richiesta al server
        client.onload = function () {
            if (client.status === 200) {
                // Chiama con risposta
                resolve(client.response);
            } else {
                // chiamata quando ci sono degli errori
                reject(new Error("Il server ha risposto con status: " + client.status));
            }
        };
        client.onerror = function () {
            reject(new Error("Problemi di connessione, verificare la connesione ad internet."));
        }
    });

    return promessa;
}



function aggiornaTabellaArticoli(articoli) {
    let divListaUtenti = document.getElementById("articoli");
    let count = 0;
    for (const articolo of articoli) {
        let riga = document.createElement("div");
        let bg = count % 2 === 0 ? "bg-light" : "bg-secondary text-white";
        riga.className = "row " + bg;
        riga.setAttribute("data-id", articolo.id);
        creaColonna(riga, articolo.id, "col-1");
        creaColonnaUtente(riga, articolo.id, articolo.userId, "col-2");
        creaColonna(riga, articolo.title, "col-7");
        creaColonnaPulsanti(riga, "col-2", articolo);
        divListaUtenti.append(riga);
        recuperaUtente(articolo.id, articolo.userId);
        count++;
    }
    divListaUtenti.className = "";
    let divLoading = document.getElementById("loading");
    divLoading.className = "d-none";
}

let chiamateAPI = [];

function verificaSeUtenteInCache(userId) {
    for (let index = 0; index < chiamateAPI.length; index++) {
        const element = chiamateAPI[index];
        if (element.id === userId) {
            return true;
        }
    }
    return false;
}

function recuperaUtenteDallaCache(userId) {
    for (let index = 0; index < chiamateAPI.length; index++) {
        const element = chiamateAPI[index];
        if (element.id === userId) {
            return element;
        }
    }
    return null;
}
function recuperaUtente(postId, userId) {
    if (!verificaSeUtenteInCache(userId)) {
        fetch("https://jsonplaceholder.typicode.com/users/" + userId)
            .then(response => response.json())
            .then(utente => {
                let divColonnaUtente = document.getElementById(postId + "_user_id_" + utente.id);
                let ancoraUtente = document.createElement("a");
                ancoraUtente.innerText = utente.name;
                ancoraUtente.href = "utente.html?userId=" + utente.id;
                divColonnaUtente.innerHTML = "";
                divColonnaUtente.append(ancoraUtente);
                chiamateAPI.push(utente);
            })
            .catch(error => {
                aggiornaAreaMessaggio(error.message, "alert-danger");
            });
    } else {
        let utente = recuperaUtenteDallaCache(userId);
        let divColonnaUtente = document.getElementById(postId + "_user_id_" + utente.id);
        let ancoraUtente = document.createElement("a");
        ancoraUtente.innerText = utente.name;
        ancoraUtente.href = "utente.html?userId=" + utente.id;
        divColonnaUtente.innerHTML = "";
        divColonnaUtente.append(ancoraUtente);
    }
}

function creaColonnaUtente(divRiga, postId, userId, classCssCol) {
    let divColonna = document.createElement("div");
    divColonna.className = classCssCol;
    divColonna.innerHTML = userId;
    divColonna.id = postId + "_user_id_" + userId;
    divRiga.append(divColonna);
}

function creaColonna(divRiga, valore, classCssCol) {
    let divColonna = document.createElement("div");
    divColonna.className = classCssCol;
    divColonna.innerHTML = valore;
    divRiga.append(divColonna);
}

function creaColonnaPulsanti(divRiga, classCssCol, articolo) {
    let divColonna = document.createElement("div");
    divColonna.className = classCssCol;
    creaPulsanteModifica(divColonna, articolo);
    creaPulsanteElimina(divColonna, articolo);
    divRiga.append(divColonna);
}

function creaPulsanteModifica(divColonna, articolo) {
    let button = document.createElement("a");
    button.className = "btn btn-primary";
    button.href = "modifica-articolo.html?postId=" + articolo.id;
    button.innerText = "Modifica";
    divColonna.append(button);
}

function creaPulsanteElimina(divColonna, articolo) {
    let button = document.createElement("button");
    button.className = "btn btn-danger";
    button.innerText = "Elimina";
    button.onclick = function () {

        let confermaCancellazione = confirm("Confermi cancellazione?");
        if (confermaCancellazione) {
            let client = new XMLHttpRequest();
            client.open("DELETE", "https://jsonplaceholder.typicode.com/posts/" + articolo.id); //REST API
            client.send(); //Inviato la richiesta al server
            client.onload = function () {
                if (client.status === 200) {
                    // Chiama con risposta
                    aggiornaAreaMessaggio();
                    recuperaArticoli();
                } else {
                    // chiamata quando ci sono degli errori
                    aggiornaAreaMessaggio(client.statusText, "alert-danger");
                }
            }
        }

    }
    divColonna.append(button);
}