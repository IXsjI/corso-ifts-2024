enum GiorniSettimana {
    LUNEDI = "Lunedì",
    MARTEDI = "Martedì",
    MERCOLEDI = "Mercoledì",
    GIOVEDI = "Giovedì",
    VENERDI = "Venerdì",
    SABATO = "Sabato",
    DOMENICA = "Domenica",
}


function salutoS(giorno: string) {
    giorno = giorno.toUpperCase();
    for (const a in GiorniSettimana) {
        if (giorno == a){
            return GiorniSettimana[a];
        }
    }
    return alert("Dato inserito ERR");
}


console.log(salutoS("lunedi"))