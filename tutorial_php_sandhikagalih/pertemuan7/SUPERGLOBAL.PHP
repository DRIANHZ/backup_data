<?php
//$_GET
// $_GET["nama"] = "drian";
//SUPERGLOBAL.PHP?nama=drian
// $_GET["nis"] = "11234";
//SUPERGLOBAL.PHP?nis=11234

var_dump($_GET);

?>

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
          <a href="latihan2.php?nama=<?= $mhs['nama'] ?>"><li>nama : <?= $mhs['nama']; ?></li></a>  
            
        </ul>
    <?php endforeach; ?>
</body>

</html>