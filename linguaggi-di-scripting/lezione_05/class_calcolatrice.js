class CalcolatriceC {
    x = 0;
    y = 0;
  
    leggi(x, y) {
      if (typeof x == "number" && x >= 0) {
        this.x = x;
      }
      if (typeof y == "number" && y >= 0) {
        this.y = y;
      }
    }
    somma() {
      return this.x + this.y;
    }
    sottrazione() {
      return this.x - this.y;
    }
    moltiplicazione() {
      return this.x * this.y;
    }
    divisione() {
      if (this.y > 0) {
        return this.x / this.y;
      }
      return 0;
    }
  }
  
  let calcol = new CalcolatriceC();

  calcol.leggi(10, 10);
  console.log(calcol.somma());
  console.log(calcol.sottrazione());
  console.log(calcol.moltiplicazione());
  console.log(calcol.divisione());