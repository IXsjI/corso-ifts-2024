let ora: string = "24:14";


function tempo (ora: string) {
    let aOra = ora.split(":");
    if (parseInt(aOra[0]) < 24 && parseInt(aOra[1]) < 60) {
        if (parseInt(aOra[0]) >5 && parseInt(aOra[0]) <= 11) {
            return "mattina";
        }
        if (parseInt(aOra[0]) >= 12 && parseInt(aOra[0]) <= 18) {
            return "pommeriggio";
        }
        if (parseInt(aOra[0]) >=19 && parseInt(aOra[0]) <= 21) {
            return "mattina";
        }
        return "notte";
    }
    return "Err";
}

console.log(tempo(ora));