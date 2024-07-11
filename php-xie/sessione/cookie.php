<?php
$cookie_name = "test";
$cookie_value = "valore di test";
setcookie($cookie_name, $cookie_value, time() + 30);

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
    print_r($_COOKIE);
    if (isset($_COOKIE['test']))
        echo "cookie test = " . $_COOKIE['test'];
    ?>


</body>

</html>