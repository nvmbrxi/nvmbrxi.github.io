<?php
//predefined var
$pria = array(
	array(0,18,"Kurus"),
    array(18,25,"Normal"),
    array(25,27,"Gemuk"),
    array(27,99,"Obesitas")
);
$wanita = array(
	array(0,17,"Kurus"),
    array(17,23,"Normal"),
    array(23,27,"Gemuk"),
    array(27,99,"Obesitas")
);

//input
$berat = 76;
$tinggi = 175;
$jk = 'p'; //P atau W

//proses
$bmi = $berat/pow($tinggi/100,2);
echo round($bmi,2).'<br/>';
$kategori = $jk == 'p' ? $pria : $wanita;
foreach ($kategori as $i){
	if ($bmi>$i[0] && $bmi<$i[1]){
    	echo $i[2];
    }
}
?>