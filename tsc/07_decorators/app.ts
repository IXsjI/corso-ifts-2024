function logged(constructorFn: Function, b) {
    console.log(constructorFn);
}

@logged
class Person {
    constructor() {
        console.log("Hi!");
    }
}

let p = new Person()