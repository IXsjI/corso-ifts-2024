function stampaProprietaPersona(p) {
    console.log(p.nome + ", età:" + p.eta + ", indirizzo:" + strIndirizzo(p.indirizzo));
}
function strIndirizzo(indirizzo) {
    return indirizzo.strada + " " + indirizzo.citta + " " + indirizzo.stato;
}
var persona = {
    nome: "Sj",
    eta: 20,
    indirizzo: {
        strada: "Via Flaminia",
        stato: "IT",
        citta: "Rimini"
    }
};
stampaProprietaPersona(persona);


