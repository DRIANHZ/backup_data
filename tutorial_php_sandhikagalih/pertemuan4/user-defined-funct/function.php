<?php 
function salam(string $waktu = "datang" ,string $admin = "admin"){
    return "selemat $waktu $admin";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= salam(); ?></h1>
</body>
</html>