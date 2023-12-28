<?php
//user defined function
function greeting($time ="Datang", $name = "Admin"){
    return "Selamat $time, $name!";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function PHP</title>
</head>
<body>
    <h1><?= greeting("Malam", "Indra"); ?></h1>
</body>
</html>