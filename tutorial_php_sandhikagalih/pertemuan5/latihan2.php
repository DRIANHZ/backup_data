<?php 
//pengulangan pada array
// for / foreach

$angka = [1,2,4,3,6,5,7,8,9];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin:3px;
            float:left;

        }

        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php
    sort($angka);
    for($i = 0; $i < count($angka); $i++){ ?>
    <div class="kotak"><?= $angka[$i] ?></div>
    <?php }?>

    <div class="clear"></div>

        <?php foreach($angka as $key) :?>
        <div class="kotak"><?= $key ?></div>
        <?php endforeach; ?>
</body>
</html>