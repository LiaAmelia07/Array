<?php
$jr= array("jurusan1"=>"Teknik Informatika",
           "jurusan2"=>"Sistem Informasi",
           "jurusan3"=>"Teknik Komputer",
           "jurusan4"=>"Manajemen Informatika");

foreach($jr as $index => $value) {
    echo "Kata kunci Index=  " . $index . ", Nilai = " . $value;
    echo "<br>";
}
?>