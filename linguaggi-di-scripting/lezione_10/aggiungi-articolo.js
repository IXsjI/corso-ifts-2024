
function aggiungiArticolo(articolo) {
    let article = new XMLHttpRequest();
    article.open("POST", "https://jsonplaceholder.typicode.com/posts");
    article.send(articolo);

}