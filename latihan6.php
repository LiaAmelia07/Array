<?php
//Array Asosiatif
echo "<p> Program Array Assosiatif";
echo "</br>";
$hitung= array(

    array('Segitiga','1/2 x alas x tinggi','1/2 x 8 x 10 = 40','a + b + c','8 + 8 + 4 = 20'),
    array('Persegi','sisi x sisi','5 x 5 = 25','4s','5 x 5 x 5 x 5 = 625'),
    array('Persegi Panjang','Panjang x Lebar','8 x 4 = 32','2(P+L)',' 2(4+2) = 12'),
    array('Lingkaran',' πr2 ','22/7 x 7 x 7 = 154','2πr',' 2 x 22/7 x 14 = 88')
);
?>
<ul>
    <?php foreach ($hitung as $key => $value) : ?>
    <li>Bangun Datar : <?=$value[0]?><br> Rumus Luas : <?= $value[1]?><br> contoh luas : <?=$value[2]?><br>
    Rumus Keliling : <?=$value[3]?><br> contoh keliling : <?=$value[4]?><p></li>
    <?php endforeach ?>
</ul>