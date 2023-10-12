<?php 

$mahasiswa = [
    ['didi','020202','ti','email'],
    ['dodo','030303','tm','email'],
    ['dudu','040404','tp','email'],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($mahasiswa as $data => $isi ): ?>
    <ol>
        <?php for($i = 0; $i < count($isi); $i++): ?>  
        <li> <?= $isi[$i] ?></li>
        <?php endfor; ?>
        </ol>
        <?php endforeach;?>
</body>
</html>