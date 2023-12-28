<?php
//built in function php

//1. Date/Time

//Date(menampilkan tanggal dgn format tertentu)
echo date('l, d-M-Y');

echo'<br />';
//Time(menampilkan waktu dgn format tertentu)
echo time();

echo'<br />';

echo date('l', time()+60*60*24*100);

echo'<br />';
//mktime(membuat format waktu sendiri). format(jam,menit,detik,tanggal,bulan,tahun)
echo date('l, d M Y', mktime(0,0,0,4,17,1998));

echo'<br />';

//strtotime(membuat format tanggal)
echo date("l", strtotime("17 April 1998"));
?>