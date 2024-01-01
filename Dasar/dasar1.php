<?php
//single comment
/*
multi line comment
*/

//Sintaks Dasar PHP

//Standar Output(echo, print, print_r(utk array),var__dump(utk mengetahui tipe data php))
echo "Alfaraby Indra";
echo "<br>";
print "Alfaraby Indra";
echo "<br>";
print_r ("Alfaraby Indra");
echo "<br>";
var_dump ("Alfaraby Indra");
echo "<br>";


/*
Penulisan Sintaks PHP ada 2:
1. PHP di dalam HTML
2. HTML di dalam PHP
*/ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Dasar</title>
</head>

<body>
<h1>Welcome, <?php echo "Indra";?></h1>   
<p>Sedang Belajar PHP dasar dari channel <?php echo "WPU"; ?></p> 


<?php
echo "<p>Test, 1,2,3...</p>"
?>
</body>
</html>