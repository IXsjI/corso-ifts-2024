class Contatto {
    constructor(nome,cognome,eta){
        this.nome = nome;
        this.cognome = cognome;
        this.eta = eta;
    }

    toJson(){
        return JSON.stringify(this);
    }

    fromJson(str){
        let obj = JSON.parse(str);
        this.nome = obj.nome;
        this.cognome = obj.cognome;
        this.eta = obj.eta;
        return this;
    }
}