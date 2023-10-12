<?php
$mahasiswa = [
    [
        "nama" => "nugraha",
        "nrp" => "0303",
        "email" => "nur@gmail.com",
        "jurusan" => "rpl",
        "gambar" => "image/img1.png"

    ],

    [
        "nama" => "akbar",
        "nrp" => "0202",
        "email" => "bar@gmail.com",
        "jurusan" => "rpl",
        "gambar" => "image/img2.png"

    ],
];

echo $mahasiswa[1]["tugas"][2];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 100px;
        }
    </style>
</head>

<body>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>nama : <?= $mhs['nama']; ?></li>
            <li>nama : <?= $mhs['nrp']; ?></li>
            <li>nama : <?= $mhs['jurusan']; ?></li>
            <li>nama : <?= $mhs['email']; ?></li>
            <li>
                <img src="<?= $mhs['gambar'] ?>" alt="">
            </li>
        </ul>
    <?php endforeach; ?>
</body>

</html>