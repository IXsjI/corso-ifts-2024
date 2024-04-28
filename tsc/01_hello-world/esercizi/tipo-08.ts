interface Animale {
    nome: string;
    specie: string;
    zampe: number;
}

let animali: Animale[];
animali = [
    {nome: "gallina", specie:"u", zampe:2},
    {nome: "gatto", specie:"m", zampe:4},
    {nome: "cane", specie:"m", zampe:4},
    
]

function animaliQuattroZampe (lista: Animale[]) {
    let animaliQuattroZampe: Animale[] = [];
    for (const animale of lista) {
        if (animale.zampe == 4) {
            animaliQuattroZampe.push(animale);
        }
    }
    return animaliQuattroZampe;
}

console.log(animaliQuattroZampe(animali));