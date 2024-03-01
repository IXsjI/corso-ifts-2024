// let numero = parseInt(prompt());
// console.log(numero);

/*if (isNaN(numero)) {
    alert("Hai inserito un numero non valido");
} else if(numero % 2) {
    alert("Dispari");
} else {
    alert("Pari");
}*/

/*if (!isNaN(numero)){
    switch (numero % 2) {
        case 0:
            alert("Pari");
            break;
        case 1:
            alert("Dispari");
            break;
    }
}else{
    alert("hai inserito un numero non valido.");
}*/

/*switch (numero % 2) {
    case 0:
        alert("pari");
        break;
    case 1:
        alert("Dispari");
        break;

    default:
        alert("Hai inserito un numero non valido");
        break;
}*/

/*if (isNaN(numero)){
    alert("hai inserito un numero non valido.");
}else{
    let msg = numero % 2 ? "Dispari" : "Pari"; 
    alert(msg);
}*/

/*var x = 0;
while (x<10){
    x++;
    if (x>3)continue;
    // se maggiore di 3 non esegue quello che segue
    console.log(x);
}*/

/*var quantita = [1,2,3,4,5];
var totale = 0;
var indice;
for (indice in quantita) {
    totale += quantita[indice];
}
// fa la stessa cosa di
var valore;
for (valore of quantita) {
    totale += valore;
}
console.log(totale);*/

// Es 1

/*for (let i = 20; i >= 0; i--) {
  if (i % 2 == 0) {
    console.log(i);
  }
}*/

//Es 2

/*for (let i = 1; i <= 10; i++) {
  switch (i) {
    case 1:
      console.log("uno");
      break;
    case 2:
      console.log("due");
      break;
    case 3:
      console.log("tre");
      break;
    case 4:
      console.log("quattro");
      break;
    case 5:
      console.log("cinque");
      break;
    case 6:
      console.log("sei");
      break;
    case 7:
      console.log("sette");
      break;
    case 8:
      console.log("otto");
      break;
    case 9:
      console.log("nove");
      break;
    case 10:
      console.log("dieci");
      break;

    default:
      break;
  }

  let arrayNumeri = ["uno", "due", "tre", "quattro", "cinque", "sei", "sette", "otto", "nove", "dieci"];
  let v;
  for (v of arrayNumeri) {
    console.log(v);
  }
}*/

//Es 3
/*let risultato = 0;
for (let i = 0; i <= 10; i++) {
//   risultato = numero * i;
//   console.log(risultato);
  console.log(numero * i);
}*/

//Es 4
let a = [3, 5, 10, 2, 8];
let totale = 0;

for (let indice in a) {
  totale += a[indice];
}

let media = totale / a.length;

console.log(totale);
console.log(media);

for (let valore of a) {
  if (valore < media) {
    console.log(valore); 
  }
}
