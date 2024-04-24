
function nuovaPrenotazione() {
    let nuovaPrenotazione = {};
    nuovaPrenotazione.nome = document.getElementById("nome").value;
    nuovaPrenotazione.cognome = document.getElementById("cognome").value;
    nuovaPrenotazione.email = document.getElementById("email").value;
    nuovaPrenotazione.cellulare = document.getElementById("cellulare").value;
    nuovaPrenotazione.dataPrenotazione = document.getElementById("data").value;
    nuovaPrenotazione.stato = "IN_ATTESA_DI_CONFERMA";
    nuovaPrenotazione.numeroCoperti = document.getElementById("coperti").value;
    nuovaPrenotazione.note = document.getElementById("note").value;
    return nuovaPrenotazione;
}


// let btnNPrenotazione = document.getElementById("btnSalva");
// btnSalva.onclick = function () {
//     let n = nuovaPrenotazione();
//     console.log(n);
// }

let formPrenotazione = document.getElementById("formPrenotazione");
formPrenotazione.addEventListener("submit", function (e) {
    e.preventDefault();
    let nuovaPren = nuovaPrenotazione();
    fetch("http://192.168.9.116:9888/v1/prenotazione", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(nuovaPren)
    })
        .then(response => {alert("Salvato con successo")})
        .catch(err => alert(err.message));

})