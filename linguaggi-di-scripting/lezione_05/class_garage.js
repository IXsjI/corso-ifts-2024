class Auto {
  constructor(targa, modello, marca) {
    this.targa = targa;
    this.modello = modello;
    this.marca = marca;
  }
}

class Garage {
  elencoAuto = [];

  ricercaAutoPerTarga(targa) {
    for (const auto of this.elencoAuto) {
      if (auto.targa === targa) {
        return auto;
      }
    }
    return null;
  }
  inserisciAuto(auto) {
    if (this.ricercaAutoPerTarga(auto.targa) == null) {
      this.elencoAuto.push(auto);
      return true;
    }
    return false;
  }

  rimuoviAutoPerTarga(targa) {
    for (let index = 0; index < this.elencoAuto.length; index++) {
      const auto = this.elencoAuto[index];
      if (auto.targa === targa) {
        this.elencoAuto.splice(index, 1);
      }
    }
  }
  verificaSePieno() {
    return this.elencoAuto.length === 0;
  }
  verificaSeVuoto() {
    const MAX_AUTO = 100;
    return this.elencoAuto.length === MAX_AUTO;
  }
}

let garage = new Garage();

garage.inserisciAuto(new Auto("xxxxx", "Modello", "marca"));
garage.inserisciAuto(new Auto("xxxx3", "Modello", "marca"));
garage.inserisciAuto(new Auto("xxxx2", "Modello", "marca"));

// ... copia dall'altro es
