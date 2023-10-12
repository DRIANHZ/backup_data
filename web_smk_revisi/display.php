<?php
include "proses/koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM tb_smk_revisi");

$no = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <a href="menu.php">tambah</a>
    <a href="page.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
        </svg>
    </a>

    <form action="hapus.php" method="post" >
        <table border=''>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Kelamin</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>



            <?php while ($tampil = mysqli_fetch_array($query)) : ?>
                <?php 

                   $bjir =  $tampil['id_kelas'];
                    $querykelas = mysqli_query($koneksi,"SELECT * FROM `tb_kelas` `id_kelas` where `id_kelas` = $bjir "); 


                    $datakelas = mysqli_fetch_array($querykelas);
                    
                    $kelas = $datakelas['kelas']." ".$datakelas['jurusan'];
                    
                    
                    
                    ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $tampil['nama']; ?></td>
                    <td><?php echo $tampil['nis']; ?></td>
                    <td><?php echo $tampil['kelamin']; ?></td>
                    <td><?php echo $tampil['umur']; ?></td>
                    <td><?php echo $kelas ?></td>
                    <td>
                        <a href='hapus.php?id=<?php echo $tampil['nis'] ?>&from=<?= "display" ?>'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></a>


                        <a href='formubahdata.php?id=<?php echo $tampil['nis']; ?>'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a>


                        <a href='detail.php?id=<?php echo $tampil['nis']; ?>&kelas=<?= $tampil['id_kelas'] ?>'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
  <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg></a>
                    </td>
                </tr>
                <?php $no++; ?>
            <?php endwhile; ?>
        </table>
    </form>
</body>

</html>