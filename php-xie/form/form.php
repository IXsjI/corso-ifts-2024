<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lezione 5</title>
</head>

<body>
    <h1>Form</h1>
    <form action="inviaDati.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Dati di contatto</legend>
            <label for="txtCognome">Cognome</label>
            <input type="text" name="txtCognome" id="txtCognome"
                value="<?php echo array_key_exists('txtCognome', $_REQUEST) ? $_REQUEST['txtCognome'] : "" ?>">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required value=<?php if ($_GET)
                echo $_REQUEST['email']; ?>>
        </fieldset>
        <fieldset>
            <?php
            $checkedLicenzaMedia = $checkedLaurea = $checkedDiploma = "";
            if ($_GET) {
                if ($_REQUEST['radTitoloDiStudio'] == "licenzaMedia") {
                    $checkedLicenzaMedia = "checked";
                } else if ($_REQUEST['radTitoloDiStudio'] == "diploma") {
                    $checkedDiploma = "checked";
                } else if ($_REQUEST['radTitoloDiStudio'] == "laurea") {
                    $checkedLaurea = "checked";
                }
            }

            ?>
            <legend>Titolo di studio</legend>
            <input type="radio" name="radTitoloDiStudio" id="licenzaMedia" value="licenzaMedia" <?php echo $checkedLicenzaMedia; ?>>
            <label for="licenzaMedia">Licenza Media</label>
            <input type="radio" name="radTitoloDiStudio" id="diploma" value="diploma" <?php echo $checkedDiploma; ?>>
            <label for="diploma">Diploma</label>
            <input type="radio" name="radTitoloDiStudio" id="laurea" value="laurea" <?php echo $checkedLaurea; ?>>
            <label for="laurea">Laurea</label>
            <br>
            <label for="cv" > CV</label>
            <input type="file" name="fileCV" id="cv">
            <label for="img" > Immagine</label>
            <input type="file" name="fileImg" id="img">

        </fieldset>
        <textarea name="commento" id="commento" cols="90" rows="5">Note: </textarea>
        <section id="pulsanti">
            <button type="submit">Invia Dati</button>
            <input type="reset" value="Reimposta Dati">
        </section>
    </form>
</body>

</html>