<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Verifica 04/04</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <div class="container">
        <h1>Inserisci Dati</h1>
    </div>
    <div class="container mt-3">
        <form id="formContatto" action="./inc/saluto.php" method="POST">
            <div class="form-group row ">
                <label for="cognome" class="col-sm-2 col-form-label">Cognome:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="cognome" id="cognome"
                        placeholder="Inserisci il cognome" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="data" class="col-sm-2 col-form-label">Data:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="data" name="data">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Invia Dati</button>
        </form>
    </div>

</body>

</html>