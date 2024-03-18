// es calcolatrice

function Calcolatrice() {
  this.x = 0;
  this.y = 0;

  this.leggi = function (x, y) {
    if (typeof x == "number") {
      this.x = x;
    }
    if (typeof y == "number") {
      this.y = y;
    }
  };
  this.somma = function () {
    return this.x + this.y;
  };
  this.sottrazione = function () {
    return this.x - this.y;
  };
  this.moltiplicazione = function () {
    return this.x * this.y;
  };
  this.divisione = function () {
    if (this.y > 0) {
      return this.x / this.y;
    }
    return 0;
  };
}

let calc = new Calcolatrice();
  
calc.leggi(10, 21);

console.log(calc.somma());
console.log(calc.sottrazione());
console.log(calc.moltiplicazione());
console.log(calc.divisione());
