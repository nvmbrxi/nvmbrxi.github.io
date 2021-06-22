<?php
$baris1 = "";
for ($i=1;$i<=5;$i++){
	if ($i>=2){
    	$baris1 .= "+";
    }
    $baris1 .= "1";
}

$baris2 = $baris1;

$baris3 = "";
for ($i=1;$i<=4;$i++){
	if ($i==3){
    	$baris3 .= "*0";
        continue;
    }
    if ($i>=2){
    	$baris3 .= "+";
    }
    $baris3 .= "1";
}

echo $baris1."<br>";
echo $baris2."<br>";
echo $baris3."<br>";

$formula = $baris1.$baris2.$baris3;
echo eval("return ".$formula.";");
?>