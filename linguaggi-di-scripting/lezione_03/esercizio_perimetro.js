function perimetro(figura, lati) {
  switch (figura) {
    case "quadrato":
    case "rettangolo":
      return calcolaPerimetroQuadrilateri(figura,lati);

    case "triangolo":
      return calcolaPerimetroTriangoli(lati);

    case "cerchio":
      return calcolaCirconferenza(lati);

    default:
      return 0;
  }
}

function calcolaPerimetroQuadrilateri(lati) {
    if (verificaLatiQuadrilateri(figura,lati)){
        return calcolaPerimetroInBaseAiLati(lati, 4);

    }
    return 0;
}

function calcolaPerimetroTriangoli(lati) {
  return calcolaPerimetroInBaseAiLati(lati, 3);
}

function calcolaCirconferenza(lati) {
  if (lati.length == 1) {
    let circonferenza = 0;
    const pigreco = 3.14;
    circonferenza = lati[0] * pigreco;
    return circonferenza;
  }
  return 0;
}

function calcolaPerimetroInBaseAiLati(lati, numeroLati) {
  if (lati.length == numeroLati) {
    let perimetro = 0;
    for (let lato of lati) {
      perimetro += lato;
    }
    return perimetro;
  }
  return 0;
}

function verificaLatiQuadrilateri(figura,lati){
    if (figura == "quadrato"){
        let latoTmp = lati[0];
        for (const lato of lati) {
            if (latoTmp != lato) {
                return false;
            }
        }
        return true;
    }else{
        
    }
}

function distinct(lati) {
    let risultato = [];
    for (const lato of lati) {
        if (checkOccorenze(lati, lato) == 2) {
            if (!contains(risultato, lato)) {
                risultato.
                risultato.push(lato);
            }
        }
    }
    return risultato;
}

function contains(lati, valore) {
    for (const lato of lati) {
        if (valore === lato) {
            return true;
        }
    }
    return false;
}

function checkOccorenze(lati, valore) {
    let numeroOccorenze = 0;
    for (const lato of lati) {
        if (lato === valore) {
            numeroOccorenze++;
        }
    }
    return numeroOccorenze;
}

console.log(perimetro("quadrato", [2, 2, 2, 2]));
console.log(perimetro("rettangolo", [4, 4, 2, 2]));
console.log(perimetro("triangolo", [4, 4, 4]));
console.log(perimetro("cerchio", [4]));
