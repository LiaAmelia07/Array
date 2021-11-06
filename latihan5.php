<?php
$hitung= array(

    array(
        'Nama Bangun Datar' =>'Segitiga',
        'Luas' => '1/2 x alas x tinggi',
        'Luas' => '1/2 x 8 x 10 = 40',
        'Keliling' => 'a + b + c',
        'Keliling' => '8 + 8 + 4 = 20',
    ),

    array(
        'Nama Bangun Datar' =>'Persegi',
        'Luas' => 'sisi x sisi',
        'Luas' => '5 x 5 = 25',
        'Keliling' => '4s',
        'Keliling' => '5 x 5 x 5 x 5 = 625',
    ),

    array(
        'Nama Bangun Datar' =>'Persegi Panjang',
        'Luas' => 'Panjang x Lebar',
        'Luas' => '8 x 4 = 32',
        'Keliling' => '2(P+L)',
        'Keliling' => ' 2(4+2) = 12',
    ),

    array(
        'Nama Bangun Datar' =>'Lingkaran',
        'Luas' => ' πr2 ',
        'Luas' => '22/7 x 7 x 7 = 154',
        'Keliling' => '2πr',
        'Keliling' => ' 2 x 22/7 x 14 = 88',
    )

);

echo"<pre>";
print_r($hitung) ;
echo"</br>";

?>