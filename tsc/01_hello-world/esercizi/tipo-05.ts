let voto: number = 100;

function controlloVoto(voto: number) {
    if (voto >= 0 && voto <= 100) {
        if (voto < 60) {
            return "insufficiente";
        }
        if (voto < 70) {
            return "sufficiente";
        }
        if (voto < 90) {
            return "buono";
        }

        return "eccellente";

    }
    return "Err";
}
console.log(controlloVoto(voto));