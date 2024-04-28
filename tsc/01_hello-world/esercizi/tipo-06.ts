interface Libro {
    titolo: string;
    autore: string;
    annoPubblicazione: number;
    genere: string;
}

let libri: Libro[];
libri = [
    {titolo: "latte",autore:"l", annoPubblicazione:2000, genere:"f"},
    {titolo: "pane",autore:"l", annoPubblicazione:2000, genere:"f"},
    {titolo: "torta",autore:"l", annoPubblicazione:2000, genere:"r"},
    {titolo: "crema",autore:"l", annoPubblicazione:2000, genere:"a"}
]

function ricercaLibri (genere: string) {
    let libriDisponibili: Libro[] = [];
    for (const libro of libri) {
        if (genere == libro.genere) {
            libriDisponibili.push(libro);
        }
    }
    return libriDisponibili;
}

console.log(ricercaLibri("fg"));