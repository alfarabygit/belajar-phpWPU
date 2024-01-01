<?php
//Variabel dan tipe data
/*
aturan variabel:
1. tak boleh diawali dgn angka,simbol,white space,dsb. tapi boleh mengandung angka
*/
$nama="Indra";
$nama_depan="Alfaraby";
$nama_belakang="Indra";
// echo "Halo, nama saya adalah $nama";

//Operator di PHP
/*
1. Aritmatika
2. Logika
3. Perbandingan(<,>,<=,>=,!=)
4. Penggabungan(concatenate)
5. Assignment (=, +=, -=, *=, /=)
6. Identitas(===,!==)
*/ 

$x=1;
$x+=6;
echo $x;

echo "<br>";
$a=10;
$b=5;
echo $a+$b;

echo "<br>";

$nama="Alfaraby";
$nama .=" ";
$nama .="Indra";

echo $nama;
echo "<br>";

$z=30;
var_dump($z < 20 || $z %2 == 0);
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Dasar</title>
</head>
<body>
    <h1>Welcome, <?php echo $nama; ?></h1>
    <p>Nama lengkap saya adalah <?php echo $nama_depan. " " . $nama_belakang; ?></p>
</body>
</html>