<?php 

// variable scope / lingkup variable
$x = 10;
function x(){
    // $x=22;
    global $x;
    echo $x;
}

x();
echo $x;
echo "<hr>";

//SUPER GLOBAL
//VARIIABLE MILIK PHP
//MERUPAKAN ARRAY ASO

var_dump($_POST);
?>