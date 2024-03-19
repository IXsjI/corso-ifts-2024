class Contatto {
    construct(nome, cognome, numeroTelefono) {
        this.nome = nome;
        this.cognome = cognome;
        this.numeroTelefono = numeroTelefono;
    }
}

class Rubrica {
    elencoContatti = [];

    visualizzaTuttiContatti() {
        this.elencoContatti.sort()
    }

    controlloSeContattoEsiste(numero) {
        for (const contatto of this.elencoContatti) {
            if (contatto.numero === numero) {
                return true;
            }
        }
        return null;
    }


    inserisciNuovoContatto(contatto) {
        if (this.controlloSeContattoEsiste(contatto.numeroTelefono == null)) {
            this.elencoContatti.push(contatto);
            return true;
        }
        return false;
    }

    modificaContatto(indice, contatto) {
        this.elencoContatti[indice] = contatto;
    }

    cancellaContatto(indice) {
        this.elencoContatti.splice(indice, 1);
    }

    trovaContattoConIlNome(nome) {
        for (const contatto of this.elencoContatti) {
            if (contatto.nome.substr(0, nome.length) === nome) {
                return contatto;
            }
        }
        return false;
    }
}