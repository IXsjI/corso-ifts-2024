<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>

<body>
    <?php
    $_SESSION['lingua'] = 'es';
    $_SESSION['ana_id'] = 1;
    print_r($_SESSION);
    if (isset($_SESSION['lingua']))
        echo "lingua = " . $_SESSION['lingua'];
    else
        $_SESSION['lingua'] = 'it';
    ?>


</body>

</html>