let archivio = [];
// funzione che crea un oggetto in maniera dinamica
function makeLibro(isbn, titolo, autore, editore, annoPublicazione, genere){
    return {
        isbn: isbn,
        titolo: titolo,
        autore: autore,
        editore: editore,
        annoPublicazione: annoPublicazione,
        genere: genere,
        ubicazione: null,
        dataInizioPrestito: null
    };
}

function init(){
    archivio.push(
        makeLibro(1, "La pietra filosofale", "J.R.", "Enauidi", "2003", "Fantasy")
    );

    archivio.push(
        makeLibro(2, "La compagnia dell'anello", "Tolkien", "Enauidi", "1983", "Fantasy")
    );

    archivio.push(
        makeLibro(3, "Mamma travel blogger", "Piersimoni", "Mondatori", "2020", "Marketing")
    );

}

function cercaLibro(isbn, titolo, autore){
    let libriTrovati = [];
    for (key of archivio) {
        if (isbn === key.isbn || titolo === key.titolo || autore === key.autore){
            libriTrovati.push (key);
        }

    }
    return libriTrovati;
}

function prestaLibro(isbn, nominativo){
    let risultati = cercaLibro(isbn)
    if (risultati.length === 0) {
        return undefined;
    }
    let libro = risultati[0];
    if (libro.ubicazione != null ) {
        return "Libro in prestito";
    }

    /*libro.ubicazione = nominativo;
    libro.dataInizioPrestito = new Date();

    for (let index = 0; index < archivio.length; index++) {
        const libroArch = archivio[index];
        if (libro.isbn === libroArch.isbn) {
            archivio[index] = libro;
        }
    }*/

    //uguale a questo
    aggiornaDati(isbn, nominativo, "prestito");

    return "Libro prestato a " + nominativo;
        
}

function aggiornaDati(isbn, ubicazione, azione){
    let data = null;
    if (azione === "prestito"){
        data = Date();
    }
    for (key of archivio) {
        if (key.isbn === isbn) {
            key.ubicazione = ubicazione;
            key.dataInizioPrestito = data;
        }
    }
}

function ritornaPrestito(isbn){
    let risultati = cercaLibro(isbn);
    if (risultati.length === 0) {
        return undefined;
    }
    let libro = risultati[0];
    if (libro.ubicazione != null && libro.dataInizioPrestito != null) {
        aggiornaDati(isbn, null);
        return "Libro restituito";
    }
    return "Libro è stato già restituito";

}



init();
console.log(prestaLibro(1, "Giuseppe"));
console.log(archivio);
// console.log(archivio); stampa solo dopo che ha eseguito tutto 
// cioè quello sopra stamperà l'archivio dopo il ritornaprestito sotto
console.log(ritornaPrestito(1));
console.log(archivio);