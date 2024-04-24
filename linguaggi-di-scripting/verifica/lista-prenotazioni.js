recuperaListaPrenotazioni();

function recuperaListaPrenotazioni() {
    fetch("http://192.168.9.116:9888/v1/prenotazione")
        .then(response => response.json())
        .then(prenotazioni => aggiornaTabellaPrenotazioni(prenotazioni.data))
        .catch(err => alert(err.message));
}

function aggiornaTabellaPrenotazioni(prenotazioni) {
    let listaPrenotazioni = document.getElementById("prenotazioni");
    let count = 0;
    for (const prenotazione of prenotazioni) {
        let riga = document.createElement("div");
        let bg = count % 2 === 0 ? "bg-light" : "bg-secondary text-white";
        riga.className = "row pb-2 pt-2 " + bg;
        riga.setAttribute("data", JSON.stringify(prenotazione))
        let nominativo = prenotazione.nome + " " + prenotazione.cognome
        creaColonnaId(riga, prenotazione.id);
        creaColonna(riga, nominativo, "col-2");
        creaColonna(riga, prenotazione.cellulare, "col-2");
        creaColonna(riga, prenotazione.email, "col-2");
        creaColonna(riga, prenotazione.dataPrenotazione, "col-3");
        creaColonna(riga, prenotazione.stato, "col-2");
        creaAzione(riga, prenotazione);
        listaPrenotazioni.append(riga);
        count++;
    }
}

function creaAzione(riga, prenotazione) {
    let divColonna = document.createElement("div");
    divColonna.className = "col-1";
    let stato = prenotazione.stato;
    let pulsante = document.createElement("button");
    if (stato === "IN_ATTESA_DI_CONFERMA") {
        pulsante.className = "btn btn-primary ";
        pulsante.innerText = "Conferma";
    }
    if (stato === "CONFERMATA") {
        pulsante.className = "btn btn-danger ";
        pulsante.innerText = "Annulla";
    }
    if (stato === "ANNULLATA") {
        pulsante.className = "d-none";
    }
    pulsante.onclick = function () {
        let id = prenotazione.id;
        // console.log(id);
        let stato = prenotazione.stato;
        let newStato = "";
        if (stato === "IN_ATTESA_DI_CONFERMA") {
            newStato = "CONFERMATA";
        }
        if (stato === "CONFERMATA") {
            newStato = "ANNULLATA";
        }
        fetch("http://192.168.9.116:9888/v1/prenotazione/" + id, {
            method: "PATCH",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ stato: newStato })
        })
            .catch(err => alert(err.message));
    }

    divColonna.append(pulsante);
    riga.append(divColonna);
}


function creaColonna(divRiga, valore, classCssCol) {
    let divColonna = document.createElement("div");
    divColonna.className = classCssCol;
    divColonna.innerHTML = valore;
    divRiga.append(divColonna);
}

function creaColonnaId(divRiga, valore) {
    let divColonna = document.createElement("div");
    divColonna.className = "d-none";
    divColonna.id = "idPrenotazione";
    divColonna.innerHTML = valore;
    divRiga.append(divColonna);
}

let btnAggiorna = document.getElementById("btnAggiorna");
btnAggiorna.onclick = function () {
    let divlistaPrenotazioni = document.getElementById("prenotazioni");
    divlistaPrenotazioni.innerHTML = "";
    recuperaListaPrenotazioni();
}