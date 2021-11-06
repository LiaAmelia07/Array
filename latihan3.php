<?php
$negara =[];
$negara[] = "Indonesia";
$negara[] = "Malaysia";
$negara[] = "Singapura";
$negara[] = "Brunei Darussalam";
$negara[] = "Filipina";

echo '<pre>';
print_r($negara) ;
?>

<?php
$negara = array("Indonesia"=>"Jakarta",
                "Malaysia"=>"Kuala Lumpur",
                "Singapura"=>"Singapura",
                "Thailand"=>"Bangkok",
                "Filipina" =>"Manila");

foreach ($negara as $index => $ibukota) {
    echo "Ibukota " . $index . " adalah " . $ibukota;
    echo "<br>";
}
?>