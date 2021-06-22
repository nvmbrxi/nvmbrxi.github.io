<?php
$angka = "9";
for ($i=1;$i<=10;$i++){
    $hitungan = $angka."*".$i;
    $hitungan .= "=".eval("return ".$hitungan.";");
    echo $hitungan."<br>";
}
?>