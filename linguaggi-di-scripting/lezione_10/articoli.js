function recuperaArticoli() {
    let article = new XMLHttpRequest();
    article.open("GET", "https://jsonplaceholder.typicode.com/posts");
    article.responseType = "json";
    article.send();//Invia la richiesta al server
    article.onload = function (){
        if (article.status === 200){
            // Chiama con risposta
            aggiornaDatatableArticoli(article.response);
        } else{
            // chiamata quando ci sono degli errori
            aggiornaAreaMessaggio(article.statusText);
        }
    }
}

function aggiornaAreaMessaggio(msg = "Operazione completa.") {
    let divMessaggi = document.getElementById("messaggi");
    divMessaggi.innerHTML = ""; //cancello eventuali messaggi
    divMessaggi.innerHTML = "<div class=\"alert alert-success\">" + msg + "</div>";
}

function aggiornaDatatableArticoli(listaArticoli){
    let divListaArticoli = document.getElementById("listaArticoli");
    
    for (const articolo of listaArticoli) {
        let riga = document.createElement("div");
        let opRiga = " bg-light text-black"
        if (articolo.id % 2) {
            opRiga = " bg-secondary text-white"
        }
        riga.className = "row p-2" + opRiga;
        riga.setAttribute("data-id", articolo.id);
        creaColonna(riga, articolo.userId, "col-1");
        creaColonna(riga, articolo.id, "col-1");
        creaColonna(riga, articolo.title, "col-4");
        creaColonna(riga, articolo.body, "col-6");
        divListaArticoli.append(riga);
    }
    divListaArticoli.className = "";
    let divLoading = document.getElementById("loading");
    divLoading.className = "d-none";
}

function creaColonna(divRiga, valore, classeCssCol) {
    let divColonna = document.createElement("div"); 
    divColonna.className = classeCssCol;
    divColonna.innerHTML = valore;
    divRiga.append(divColonna);
}

let btnCarica = document.getElementById("btnCarica");
        btnCarica.onclick = function () {
            recuperaArticoli();
        }