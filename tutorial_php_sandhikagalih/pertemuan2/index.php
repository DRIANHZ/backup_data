<?php 
//pertemuan 2 -php dasar
//sintaks php 

//standar output
//echo, print
//print_r
//var_dump

//penulisan sintaks php
//1.php di dalam html
//2.html di dalam php


//variable dan tipe data
//variable

$nama = "driaan";

//oprator
//aritmatika
//+ - * / %

//penggabung string /concat/
//.
$namadepan = "adrian";
$namabelakang = "hamzah";

echo $namadepan." ".$namabelakang;

//assigment oprator penugasan
//=,+=,-=,*=,/=.%=,.=


//oprator perbandingan 
//<, >, <= ,>=, ==

//identitas
//== , ===, !==
var_dump(1 == "1");

//oprator logika
//&&, ||, !, xor
$x = 30;
var_dump($x < 20 && $x % 2 == 0)

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= "is it what bro?" ?></h1>
    <?= "<h1>$nama</h1>"; ?>
</body>
</html> -->