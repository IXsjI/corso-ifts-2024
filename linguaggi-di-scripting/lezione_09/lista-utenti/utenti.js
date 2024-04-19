function recuperaListaUtenti() {
    let client = new XMLHttpRequest();
    client.open("GET", "https://jsonplaceholder.typicode.com/users");
    client.responseType = "json";
    client.send();//Invia la richiesta al server
    client.onload = function (){
        if (client.status === 200){
            // Chiama con risposta
            aggiornaDatatableUtenti(client.response);
        } else{
            // chiamata quando ci sono degli errori
            aggiornaAreaMessaggio(client.statusText);
        }
    }
}

function aggiornaAreaMessaggio(msg = "Operazione completa.") {
    let divMessaggi = document.getElementById("messaggi");
    divMessaggi.innerHTML = ""; //cancello eventuali messaggi
    divMessaggi.innerHTML = "<div class=\"alert alert-success\">" + msg + "</div>";
}

function aggiornaDatatableUtenti(listaUtenti){
    let divListaUtenti = document.getElementById("listaUtenti");
    
    for (const utente of listaUtenti) {
        let riga = document.createElement("div");
        riga.className = "row";
        riga.setAttribute("data-id", utente.id);
        creaColonna(riga, utente.id, "col-1");
        creaColonna(riga, utente.name, "col-2");
        creaColonna(riga, utente.email, "col-4");
        // indirizzo
        let indirizzo = utente.address.street + "<br> (" + utente.address.zipcode + ") - " + utente.address.city;
        creaColonna(riga, indirizzo, "col-3");
        creaColonna(riga, utente.company.name, "col-2");
        divListaUtenti.append(riga);
    }
    divListaUtenti.className = "";
    let divLoading = document.getElementById("loading");
    divLoading.className = "d-none";
}

function creaColonna(divRiga, valore, classeCssCol) {
    let divColonna = document.createElement("div"); 
    divColonna.className = classeCssCol;
    divColonna.innerHTML = valore;
    divRiga.append(divColonna);
}

