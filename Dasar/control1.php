<?php
//Struktur Kendali & Looping
/*
Looping:
1. for
2. while
3. do while
4. for each
*/

//looping for
for($i=0; $i<5; $i++){
    echo "Belajar Looping for <br>";
}

//looping while
$a=0;
while($a < 5){
    echo "Belajar Looping while <br>";
    $a++;
}

//looping do while
$b=0;
do{
    echo "Belajar Looping do while <br>";
    $b++;
}while($b < 5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Dasar</title>
</head>
<body>
    <!-- template html di php -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
            for($x=1; $x<=3; $x++){
                echo"<tr>";
                for($y=1; $y<=5; $y++){
                    echo "<td>$x, $y</td>";
                }
                echo"</tr>";
            }
        ?>
    </table>
<br>

<!-- template php di html -->
<table border="1" cellpadding="10" cellspacing="0">
    <?php for($d=1; $d <= 3; $d++) :?>
        <tr>
        <?php for($e=1; $e <= 5; $e++) :?>
            <td><?= "$d, $e" ;?></td>
            <?php endfor; ?>   
        </tr>
     <?php endfor; ?>   
</table>
</body>
</html>