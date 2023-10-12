<?php

// $hari = ["senin","selasa","rabuu"];

// print_r($hari);

// echo PHP_EOL.$hari[0];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: greenyellow;
            text-align: center;
            line-height: center;
            margin: 3px;
            float: left;
            transition: 2s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 20;
        }

        .clear{
            clear: both;
        }
    </style>
</head>

<body>
    <?php 
    $angka = [[1,2,3,],[4,5,6,],[7,8,9]];
    ?>
    <!-- <?= $angka[1][1] ?> -->
    <?php foreach($angka as $a): ?>
        <?php foreach($a as $b): ?>
    <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
    <?php endforeach; ?>
</body>

</html>