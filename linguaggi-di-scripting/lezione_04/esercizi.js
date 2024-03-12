let Calciatore = {};
console.log(Calciatore.nome);
Calciatore.nome = "Lorenzo";
Calciatore.cognome = "Pellegrini";
console.log(Calciatore.nome);
console.log(Calciatore.cognome);
Calciatore.nome = "Giuseppe";
delete Calciatore.cognome;
console.log(Calciatore);

function isEmpty(obj) {
    for (let key in obj) {
        return false;
    }
    return true;
}

let Prova = [];
console.log(isEmpty(Calciatore));
console.log(isEmpty(Prova));
console.log(typeof Prova)

var calciatori = [
    {nome: "Lorenzo", cognome: "Pellegrini", maglia: 10 },
    {nome: "Edin", cognome: "Dzeko", maglia: 23 },
    {nome: "Federico", cognome: "Chiesa", maglia: 99 },
    {nome: "Paulo", cognome: "Dybala", maglia: 10 },
    {nome: "Lorenzo", cognome: "Insigne", maglia: 10 },
    {nome: "Andrea", cognome: "Belotti", maglia: 9 },
    {nome: "Antonio", cognome: "Vacca", maglia: undefined },
];

function maglia10(obj, no = 10) {
    for (let key of obj) {
        if (key.maglia === no) {
            console.log (key.nome +" "+ key.cognome);
        }
    }
}

maglia10(calciatori, 99);

