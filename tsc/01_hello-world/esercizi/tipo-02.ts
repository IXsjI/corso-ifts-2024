enum GiorniSettimana {
    LUNEDI = "Lunedì",
    MARTEDI = "Martedì",
    MERCOLEDI = "Mercoledì",
    GIOVEDI = "Giovedì",
    VENERDI = "Venerdì",
    SABATO = "Sabato",
    DOMENICA = "Domenica",
}


function saluto(giorno: string) {
    giorno = giorno.toUpperCase();
    for (const a in GiorniSettimana) {
        if (giorno == a){
            return GiorniSettimana[a];
        }
    }

}


console.log(saluto("lunedi"))