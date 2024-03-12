// let z = 2;
// console.log(typeof z);

// Es 1
function isNumero(n) {
  if (typeof n == "number") {
    return true;
  }
  return false;
}
// meglio questo sotto che ritorna true quando le 2 condizioni sono true
function isNumero2(x, y) {
  return typeof x == "number" && typeof y == "number";
}

function somma(n1, n2) {
  if (isNumero(n1) && isNumero(n2)) {
    return n1 + n2;
  }
  return 0;
}
function sottrazione(n1, n2) {
  if (isNumero(n1) && isNumero(n2)) {
    return n1 - n2;
  }
  return 0;
}
function moltiplicazione(n1, n2) {
  if (isNumero(n1) && isNumero(n2)) {
    return n1 * n2;
  }
  return 0;
}
function divisione(n1, n2) {
  if (isNumero(n1) && isNumero(n2) && n2 > 0) {
    return n1 / n2;
  }
  return 0;
}

function operazioni(n1, n2) {
  console.log(somma(n1, n2));
  console.log(sottrazione(n1, n2));
  console.log(moltiplicazione(n1, n2));
  console.log(divisione(n1, n2));
}

function calcolo(n1, n2, o) {
  switch (o) {
    case "+":
      return somma(n1, n2);

    case "-":
      return sottrazione(n1, n2);

    case "*":
      return moltiplicazione(n1, n2);

    case "/":
      return divisione(n1, n2);

    default:
      return 0;
  }
}
let a = 5;
let b = 0;

// console.log(calcolo(a, b, "+"));

//Es 2
let matrice = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9],
];
let s;
function sommaRiga(n) {
  let Riga = matrice[n];
  let somma = 0;
  for (let i = 0; i < Riga.length; i++) {
    somma = Riga[i] + somma;
  }
  return somma;
}

s = sommaRiga(1);
console.log(s);






//Es prof
//somma riga dato un indice
//somma colonna dato un indice
//media di una riga


//let matrice = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];

function isArray(m) {
    return typeof m == "object" && typeof m.length == "number";
}

function sommaValoriRiga(m, indice) {
    if (!isArray(m)) {
        return 0;
    }

    if (indice + 1 > m.length) {
        return 0;
    }

    let riga = m[indice];
    if (!isArray(riga)) {
        return 0;
    }

    let risultato = 0;
    for (const el of riga) {
        risultato =  risultato + el;
    }

    return risultato;
}

function sommaValoriColonne(m, indice) {
    if (!isArray(m)) {
        return 0;
    }
    let risultato = 0;
    for (let i = 0; i < m.length; i++) {
        const element = m[i];
        if (isArray(element) && indice + 1 > element.length) {
            return 0;
        }
        for (let y = 0; y < element.length; y++) {
            if (y == indice){
                const col = element[y];
                risultato += col;
            }
        }
    }
    return risultato;
}

function mediaRiga(m, indice) {
    let somma = sommaValoriRiga(m, indice);
    return somma / m.length;
}

console.log(sommaValoriRiga(matrice, 0));

console.log(sommaValoriColonne(matrice, 0));

console.log(mediaRiga(matrice, 0));


