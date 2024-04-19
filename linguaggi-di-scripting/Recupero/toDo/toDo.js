recuperaToDoList();

let filtroPerStato = document.getElementById("filtroPerStato");
filtroPerStato.onchange = function () {
    let filtroPerStato = document.getElementById("filtroPerStato");
    let valoreFiltro = filtroPerStato.value;
    switch (valoreFiltro) {
        case "-1":
            mostraTutto();
            break;
        case "0":
            mostraCompletato();
            break;
        case "1":
            mostraDaFare();
            break;
    }
}

let filtroTesto = document.getElementById("testo");
filtroTesto.onchange = function () {
    let valoreDaFiltrare = document.getElementById("testo").value;
    let listaTodo = document.getElementById("listaToDo");
    for (let index = 0; index < listaTodo.children.length; index++) {
        let rigaTodo = listaTodo.children[index];
        let todo = JSON.parse(rigaTodo.getAttribute("data"));
        if (todo.title.indexOf(valoreDaFiltrare) !== -1) {
            rigaTodo.className = "row";
        } else {
            rigaTodo.className = "d-none";
        }
    }
}


function mostraTutto() {
    let listaTodo = document.getElementById("listaToDo");
    for (let index = 0; index < listaTodo.children.length; index++) {
        let rigaTodo = listaTodo.children[index];
        rigaTodo.className = "row";
    }
}

function mostraCompletato() {
    let listaTodo = document.getElementById("listaToDo");
    for (let index = 0; index < listaTodo.children.length; index++) {
        let rigaTodo = listaTodo.children[index];
        let todo = JSON.parse(rigaTodo.getAttribute("data"));
        if (todo.completed) {
            rigaTodo.className = "row";
        } else {
            rigaTodo.className = "d-none";
        }
    }
}

function mostraDaFare() {
    let listaTodo = document.getElementById("listaToDo");
    for (let index = 0; index < listaTodo.children.length; index++) {
        let rigaTodo = listaTodo.children[index];
        let todo = JSON.parse(rigaTodo.getAttribute("data"));
        if (!todo.completed) {
            rigaTodo.className = "row";
        } else {
            rigaTodo.className = "d-none";
        }
    }
}


function recuperaToDoList() {
    fetch("https://jsonplaceholder.typicode.com/todos")
        .then(response => response.json())
        .then(todos => aggiornaTabellaTodo(todos))
        .catch(err => alert(err.message));
}

function aggiornaTabellaTodo(todos) {
    let listaTodo = document.getElementById("listaToDo");
    for (const todo of todos) {
        let riga = document.createElement("div");
        riga.className = "row";
        riga.setAttribute("data", JSON.stringify(todo))
        creaColonna(riga, todo.id, "col-1");
        creaColonna(riga, todo.userId, "col-2");
        creaColonna(riga, todo.title, "col-6");
        creaStato(riga, todo.completed);
        creaAzione(riga, todo);
        listaTodo.append(riga);
    }
}

function creaAzione (riga, todo) {
    let divColonna = document.createElement("div");
    divColonna.className = "col-2";
    let pulsante = document.createElement("button");
    pulsante.className = "btn btn-primary";
    pulsante.innerText = "Cambia stato";
    pulsante.onclick = function () {
        let newTodo = {
            completed: !todo.completed
        }
        fetch("https://jsonplaceholder.typicode.com/todos/" + todo.id, {
            method: "PATCH",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(newTodo)
        })
            .then(response => console.dir(response))
            .catch(err => alert(err.message));
    }
    divColonna.append(pulsante);
    riga.append(divColonna);
}

function creaStato(divRiga, stato) {
    let divColonna = document.createElement("div");
    divColonna.className = "col-1";
    let img = document.createElement("img");
    img.width = 20;
    img.height = 20;
    img.src = stato ? "./success.png" : "./fail.png";
    divColonna.append(img);
    divRiga.append(divColonna);
}

function creaColonna(divRiga, valore, classCssCol) {
    let divColonna = document.createElement("div");
    divColonna.className = classCssCol;
    divColonna.innerHTML = valore;
    divRiga.append(divColonna);
}