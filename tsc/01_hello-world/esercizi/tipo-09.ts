let email:string = "nomeute@nte@dominio.com";

function verificaEmail (email: string) {
    let pC = email.lastIndexOf("@");
    let pPunto = email.lastIndexOf(".");
    if( pC > 0 && pPunto > 0 && pPunto > pC){
        if (pC == email.indexOf("@"))
            return "Email valida";
    }
    return "Email non valida";
    
}

console.log(verificaEmail(email));