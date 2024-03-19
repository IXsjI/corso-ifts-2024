<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Esercizio Completo</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <form action="./inc/cerca.php" method="POST" enctype="multipart/form-data">
        <div class="card text-center" style="width: 18rem;">
            <div class="card-header">Nome o Cognome</div>
            <div class="card-body">
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="nome" id="nome">
                    <button type="submit" class="btn btn-primary">Cerca</button>
            </div>
        </div>
    </form>

    Dati del nuovo record da inserire
    <form action="./inc/inserisci.php" method="POST">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="cognome">Cognome</label>
        <input type="text" name="cognome" id="cognome">
        <label for="natoil">Data di nascita</label>
        <input type="date" name="natoil" id="natoil">

        <button type="submit">Invia</button>
    </form>

</body>

</html>