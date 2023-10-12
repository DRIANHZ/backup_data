<?php 
//array
//adalah variable yang menampung banyak nilai

//make array
//cara laama
$hari = array("senin","selasa","rabu");
//menambahkan element baru pada array
$hari[] = "kamis";
$hari[] = "jumaat";


//cara baru
$bulan = ["jan","feb","mar"];

$arr1 = [123,'dede',true];

//menampilkan array
//menampilkan 1 element pada array
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
var_dump($hari);
echo "<br>";
print_r($hari);

?>