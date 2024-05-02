var FasciaOraria;
(function (FasciaOraria) {
    FasciaOraria["NOTTE"] = "NOTTE";
    FasciaOraria["MATTINO"] = "MATTINO";
    FasciaOraria["POMERIGGIO"] = "POMERIGGIO";
    FasciaOraria["SERA"] = "SERA";
    FasciaOraria["ERROR"] = "ERROR";
})(FasciaOraria || (FasciaOraria = {}));
var ora = "19:14";
/**
 * data un'ora ritorna la stringa che descrive la fascia oraria
 *
 * @param ora
 * @returns
 * - Mattina: 06.00 - 11.59
 * - Pomeriggio: 12.00 - 17.59
 * - Sera: 18.00 - 23.00
 * - Notte: 00.00 - 5.59
 */
function determinaFasciaOraria(ora) {
    var aOra = ora.split(":");
    var hh = parseInt(aOra[0]);
    var mm = parseInt(aOra[1]);
    if (hh < 24 && mm < 60 && hh >= 0 && mm >= 0) {
        if (hh > 5 && hh <= 11) {
            return FasciaOraria.MATTINO;
        }
        if (hh >= 12 && hh <= 18) {
            return FasciaOraria.POMERIGGIO;
        }
        if (hh >= 19 && hh <= 21) {
            return FasciaOraria.SERA;
        }
        return FasciaOraria.NOTTE;
    }
    return FasciaOraria.ERROR;
}
console.log(determinaFasciaOraria(ora));
