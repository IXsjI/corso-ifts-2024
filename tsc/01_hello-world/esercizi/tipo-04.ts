let telefono: string = "123-456-7830";

function controlloCifra(n: string) {
    let cifre: string[] = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    for (const cifra of cifre) {
        if (n === cifra) {
            return true;
        }
    }
    return false;
}

function verificaNumero(tel: string) {
    let aTel = tel.split("-");
    // console.log(aTel);
    if (aTel.length === 3 &&
        aTel[0].length === 3 &&
        aTel[1].length === 3 &&
        aTel[2].length === 4
        ) 
    {
        for (const elemATel of aTel) 
        {
            let listNum = elemATel.split("");
            for (const num of listNum) {
                if (controlloCifra(num)) {

                } else {
                    return "Err";
                }
            }
        }
        return "OK";
    } else {
        return "Err";
    }
}


console.log(verificaNumero(telefono));