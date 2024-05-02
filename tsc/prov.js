function* prova() {
    for (let index = 0; index < 3; index++) {
        yield index;
    }
}

let a = [...prova()]