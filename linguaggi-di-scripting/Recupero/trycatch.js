function validaNome(nome) {
    if (typeof nome !== "string") {
        throw new Error("Il paramentro non è una stringa");
    }

    if (nome.trim() == "") {
        throw new Error("E' stata inserita una stringa vuota");
    }

    if (nome.length <= 10) {
        throw new Error("E' stata inserita una stringa troppo corta");
    }
}


let pulsante = document.getElementById("pulsante");
pulsante.onclick = function () {
    try {
        let nome = document.getElementById("nome").value;
        vala();
        validaNome(nome);
    } catch (error) {
        console.log(error);
        alert(error.message);
    }
}