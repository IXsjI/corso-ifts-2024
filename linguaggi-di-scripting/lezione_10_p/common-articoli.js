function aggiornaAreaMessaggio(msg = "Operazione completa.", classMsg = "alert-success") {
    let divMessaggi = document.getElementById("messaggi");
    divMessaggi.innerHTML = ""; //cancello eventuali messaggi
    divMessaggi.innerHTML = "<div class=\"alert " + classMsg + "\">" + msg + "</div>";
}

function cancellaMessaggio() {
    let divMessaggi = document.getElementById("messaggi");
    divMessaggi.innerHTML = ""; //cancello eventuali messaggi
}


