class Lista {
    constructor() {
        this.elementi = [];
    }
    forEach(callback) {
        for (let index = 0; index < elementi.length; index++) {
            const element = elementi[index];
            callback(element);
        }
    }

    push(element, preCallback, postCallback) {
        preCallback(element);
        this.elementi.push(element);
        postCallback(element);
    }
}


let lista = new Lista();
let pre = function (e) { return e + 10; };
let post = function (e) { return e * 1000; };
lista.push(10, pre, post);
//lista.push(20);

lista.forEach(e => console.log(e));
