<?php
$jr = array("Teknik Informatika",
            "Sistem Informasi",
            "Teknik Komputer",
            "Manajemen Informatika");
$jumlah= count($jr);
for($b = 0; $b < $jumlah; $b++) {
    echo "Jurusan ".$jr[$b]." - ada di index $b";
    echo "<br>";
}
?>