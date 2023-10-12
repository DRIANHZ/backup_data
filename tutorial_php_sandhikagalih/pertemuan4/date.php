<?php 
//date untuk menampilkan tanggal dan format tertentu
echo date("l");
/** l:hari d:tanggal(angka) D:tanggal(singkat) m:bulan(huruf) M:bulan(angka) y:taun(singkat) Y:taun */

echo "<hr>";
//time
//time stamp
//detik yang sudah berlalu sejak 1 jan 1970
echo time()."<br>";
echo date("l",time()+60*60*24*100)."<br>";


//mktime 
//untuk membuat detik sendiri dari 1970 samopai tanggal yang ingin di tentukan
//jam,menit,detik,bulan,tanggal,tahun
echo mktime(0,0,0,10,10,2023);
echo date("l",mktime(0,0,0,10,10,2023))."<br>";


//strtotime
echo strtotime("10 oct 2023");
echo date("l",strtotime("10 oct 2023"))."<br>";
echo "<hr>";
?>

