let SORT_ASC_CONTATTO = function (x, y) {
    if (x.nome.toLowerCase() > y.nome.toLowerCase()) {
        return 1;
    } else if (x.nome.toLowerCase() < y.nome.toLowerCase()) {
        return -1;
    } else {
        return 0;
    }
}

let SORT_DESC_CONTATTO = function (x, y) {
    if (x.nome.toLowerCase() > y.nome.toLowerCase()) {
        return -1;
    } else if (x.nome.toLowerCase() < y.nome.toLowerCase()) {
        return 1;
    } else {
        return 0;
    }
}
class Contatto {
    constructor(nome, cognome, numeroTelefono) {
        this.nome = nome;
        this.cognome = cognome;
        this.numeroTelefono = numeroTelefono;
    }
    toString() {
        return this.nome + " " + this.cognome + " " + this.telefono;
    }
}

class Rubrica {
    elencoContatti = [];

    visualizzaTuttiContatti(ordinamento) {
        this.elencoContatti.sort()
    }

    seEsisteNumero(numero) {
        for (const contatto of this.elencoContatti) {
            if (contatto.numero === numero) {
                return true;
            }
        }
        return null;
    }

    seEsisteIndice(indice) {
        for (let index = 0; index < this.elencoContatti.length; index++) {
            if (index === indice) {
                return true;
            }
        }
        return null;
    }

    trovaContattoConIlNome(nome) {
        nome = nome.toLower
        for (const contatto of this.elencoContatti) {
            if (contatto.nome.substr(0, nome.length) === nome) {
                return contatto;
            }
        }
        return false;
    }

    /* più performante - stringa.indexOf(x) controlla se x è presente nella stringa e restituice la posizione in cui si trova nella stringa
    ricercaContatto(query) {
        let risultato = [];
        query = query.toLowerCase();
        for (let index = 0; index < this.database.length; index++) {
            const contatto = this.database[index];
            if (contatto.nome.toLowerCase().indexOf(query) !== -1
                || contatto.cognome.toLowerCase().indexOf(query) !== -1
                || contatto.telefono.toLowerCase().indexOf(query) !== -1) {
                risultato.push(contatto);
            }
        }
        return risultato;
    }*/

    inserisciNuovoContatto(contatto) {
        if (this.seEsisteNumero(contatto.numeroTelefono == null)) {
            this.elencoContatti.push(contatto);
            return true;
        }
        return false;
    }

    modificaContatto(indice, contatto) {
        if (this.seEsisteIndice(indice)) {
            this.elencoContatti[indice] = contatto;
        }
        return false;
    }

    cancellaContatto(indice) {
        if (this.seEsisteIndice(indice)) {
            this.elencoContatti.splice(indice, 1);
        }
        return false;
    }

    stampaContatti(ordinamento) {
        let fn = ordinamento === "DESC" ? SORT_DESC_CONTATTO : SORT_ASC_CONTATTO ;
        this.elencoContatti.sort(fn);
        this.elencoContatti.forEach(e => console.log(e.toString()));
    }

}