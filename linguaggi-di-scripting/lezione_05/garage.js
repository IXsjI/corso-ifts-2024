function Auto(nome, marca, targa) {
  (this.targa = targa), (this.nome = nome), (this.marca = marca);
}

let garage = {
  elencoAuto: [],

  ricercaAutoPerTarga: function (targa) {
    for (const auto of this.elencoAuto) {
      if (auto.targa === targa) {
        return auto;
      }
    }
    return null;
  },
  inserisciAuto: function (auto) {
    if (this.ricercaAutoPerTarga(auto.targa) == null) {
      this.elencoAuto.push(auto);
      return true;
    }
    return false;
  },
  stampaAutoPerMarca: function (marca) {
    for (const auto of this.elencoAuto) {
      if (auto.marca === marca) {
        console.log(auto.nome);
      }
    }
  },
  rimuoviAutoPerTarga: function (targa) {
    for (let index = 0; index < this.elencoAuto.length; index++) {
      const auto = this.elencoAuto[index];
      if (auto.targa === targa) {
        this.elencoAuto.splice(index, 1);
      }
    }
  },
  isEmpty: function () {
    // se cominci in italiano continua in italiano e non cambiare lingua
    /*if (this.elencoAuto.length === 0) {
                  return true;
                }
                return false;*/
    // oppure
    return this.elencoAuto.length === 0;
  },
  isFull: function () {
    const MAX_AUTO = 100;
    return this.elencoAuto.length === MAX_AUTO;
  },
};

garage.inserisciAuto(new Auto("500", "Fiat", "GG000XX"));
garage.inserisciAuto(new Auto("Enzo", "Ferrari", "DG000XD"));
garage.inserisciAuto(new Auto("Panda", "Fiat", "DG000X2"));
garage.inserisciAuto(new Auto("Ibiza", "Seat", "EG000XD"));

garage.stampaAutoPerMarca("Fiat");

garage.stampaAutoPerMarca("Ferrari");

garage.rimuoviAutoPerTarga("GG000XX");

console.log(garage.elencoAuto);

console.log(garage.isEmpty());

