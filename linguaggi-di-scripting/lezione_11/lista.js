let promessa = new Promise(function (resolve, reject) {
    let parole = ["ciao", "javascript", "testo", "marco"];
    let testi = [];
    try {
        for (let index = 0; index < 10; index++) {
            let testo = "";
            for (let index = 0; index < 50; index++) {
                let y = Math.floor(Math.random() * parole.length - 1);
                const element = parole[y];
                if (element === undefined) {
                    throw new Error("Parola non presente.");
                }
                testo = testo + " " + element;  
            }
            testi.push(testo);
            
        }
        resolve(testi);
        
    } catch (error) {
        reject(error);
    }
});

promessa.then(testi => {
        testi.forEach(testo => {
            let paragrafo = document.createElement("p");
            paragrafo.append(testo);
            document.body.append(paragrafo);
            // console.log(testo);
        })
    })
    .catch(e => alert(e.message));