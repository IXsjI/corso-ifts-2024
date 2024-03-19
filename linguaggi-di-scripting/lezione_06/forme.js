const PIGRECO = 3.1415;

class figureGeometriche {
    constructor(nome) {
        this.nome = nome;
    }
    
    calcoloArea() {
        //TODO da implementare
        return 0;
    }
}

class Poligoni extends figureGeometriche {
    constructor(nome){
        super(nome);
    }

    calcoloPerimetro() {
        //TODO da implementare
        return 0;
    }
}

class Quadrilateri extends Poligoni {
    constructor(nome, lato1, lato2) {
        super(nome);
        this.alto1 = lato1;
        this.lato2 = lato2;
    }

    calcoloPerimetro() {
        return (this.lato1 + this.lato2) * 2;
    }

    calcoloArea() {
        return this.lato1 * this.lato2;
    }
}

// FigureGeometriche -> Quadrilateri -> Quadrato
class Quadrato extends Quadrilateri {
    constructor(lato) {
        super("quadrato", lato, lato);
    }
}

// FigureGeometriche -> Poligoni -> Quadrilateri -> Rettangolo
class Rettangolo extends Quadrilateri {
    constructor(lato, lato1) {
        super("Rettangolo", lato, lato1);
    }
}

// FigureGeometriche -> Poligoni -> Quadrilateri -> Trapezio
class Trapezio extends Quadrilateri {
    constructor(baseMinore, baseMaggiore, latoObliquo1, latoObliquo2, altezza) {
        super("Trapezio");
        this.baseMinore = baseMinore;
        this.baseMaggiore = baseMaggiore;
        this.latoObliquo1 = latoObliquo1;
        this.latoObliquo2 = latoObliquo2;
        this.altezza = altezza;
    }

    calcoloArea() {
        // ((base minore + base maggiore) * altezza) /2
        return ((this.baseMinore + this.baseMaggiore) * this.altezza) / 2;
    }

    calcoloPerimetro() {
        return (
            this.baseMaggiore +
            this.baseMinore +
            this.latoObliquo1 +
            this.latoObliquo2
        );
    }
}

// FigureGeometriche -> Poligoni -> Triangolo
class Triangolo extends Poligoni {
    constructor(base, lato1, lato2, altezza) {
        super("Triangolo");
        this.base = base;
        this.lato1 = lato1;
        this.lato2 = lato2;
        this.altezza = altezza;
    }

    calcoloPerimetro() {
        return this.base + this.lato1 + this.lato2;

        /*let perimetro = 0;
        for (const key in this) {
          if (key != "altezza") {
            const lato = this[key];
            perimetro = perimetro + lato;
          }
        }
        return perimetro;*/
    }

    calcoloArea() {
        return (this.base * this.altezza) / 2;
    }
}

class Cerchio extends figureGeometriche {
    constructor(raggio) {
        super("Cerchio");
        this.raggio = raggio;
    }

    calcoloArea() {
        return this.raggio * this.raggio * PIGRECO;
    }

    calcoloCirconferenza() {
        return this.raggio * 2 * PIGRECO;
    }
}

new Trapezio(3,9,5,5, 4)


