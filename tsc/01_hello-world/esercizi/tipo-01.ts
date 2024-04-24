interface IPersona {
  nome: string;
  eta: number;
  indirizzo: IIndirizzo;
}

interface IIndirizzo {
  strada: string;
  citta: string;
  stato: string;
}

function stampaProprietaPersona(p: IPersona): void {
  console.log(p.nome + ", età:" + p.eta + ", indirizzo: " + strIndirizzo(p.indirizzo));
}

function strIndirizzo(indirizzo: IIndirizzo) {
  return indirizzo.strada + " " + indirizzo.citta + " " + indirizzo.stato;
}

let persona: IPersona = {
    nome: "Sj",
    eta: 20,
    indirizzo: {
        strada: "Via Flaminia",
        stato: "IT",
        citta: "Rimini"
    }
}

stampaProprietaPersona(persona);

