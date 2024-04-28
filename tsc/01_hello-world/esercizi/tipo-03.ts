// Crea un'interfaccia per rappresentare un prodotto con le seguenti proprietà: 
// nome (stringa), prezzo (numero) e disponibilità (booleano). 
// Crea una funzione che accetta un array di prodotti come parametro e restituisce un nuovo array contenente solo i prodotti disponibili.

interface Prodotto {
    nome: string;
    prezzo: number;
    disponibilita: boolean;
}

let listaProdotti: Prodotto[];
listaProdotti = [
    {nome: "latte", prezzo:5, disponibilita:true},
    {nome: "pane", prezzo:3, disponibilita:true},
    {nome: "torta", prezzo:7, disponibilita:false},
    {nome: "crema", prezzo:4, disponibilita:true}
]

function prodottiDisp (lista: Prodotto[]) {
    let prodottiDisponibili: Prodotto[] = [];
    for (const prodotto of lista) {
        if (prodotto.disponibilita) {
            prodottiDisponibili.push(prodotto);
        }
    }
    return prodottiDisponibili;
}

console.log(prodottiDisp(listaProdotti));