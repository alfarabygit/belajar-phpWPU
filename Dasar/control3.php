<?php
/*struktur percabangan
1. if
2. else
3. if else nested
4. switch
5. ternary
*/
//if
$a=10;
if($a < 20){
    echo "Benar";
}
echo"<br/>";

//else
$b=30;
if($b < 20){
    echo "Benar";
}else{
    echo "Salah";
}
echo"<br/>";
//else if
$c=20;
if($c < 20){
    echo "Benar";
}else if($c == 20){
    echo "Bingo!";
}
else{
    echo "Salah";
}
echo"<br/>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Dasar</title>
    <style>
        .row-color{
            background-color: silver;
        }
    </style>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
    <?php for($d=1; $d <= 3; $d++) :?>
        <?php if($d %2 == 0) :?>
            <tr class="row-color">
        <?php else : ?>    
        <tr>
        <?php endif; ?> 

        <?php for($e=1; $e <= 5; $e++) :?>
            <td><?= "$d, $e" ;?></td>
            <?php endfor; ?>   
        </tr>
     <?php endfor; ?>   
</table>
</body>
</html>