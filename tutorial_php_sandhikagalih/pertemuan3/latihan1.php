<?php
//perulangan
//for
//while
//do..while
//foreach :pengulagan khusus array

for ($i = 0; $i < 5; $i++) {
    //insialisasi -terminasi -increament decreament 
    echo "hello world<br>";
    //men cetak
}

echo "<hr>";
$i = 0;
//insialisasi
while ($i < 5) {
    //terminasi
    echo "hello world";
    $i++;
    //increament
}
echo "<hr>";

$i = 0;
//insialisasi
do {
    echo "hello world<br>";
    //mencetak
    $i++;
    //increament;
    //do while akan mejalan kan sekali program nya 
    //walaupun kondisi nya false jadi tetap akan mencetak 1 kondisi
} while ($i < 5);
//terminasi

echo "<hr>";

?>
<style>
    .warna{
        background-color: cyan;
    }
</style>

<table border="1" cellspacing='0'>

    <?php for ($i = 0; $i < 10; $i++) : ?>
        <?php if($i % 2 == 1){ ?>
            <tr class="warna">
                <?php } else{ ?>
            <tr>
                <?php }?>
            <?php for ($x = 0; $x < 10; $x++) : ?>
                <td><?= $i . "." . $x ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

<hr>