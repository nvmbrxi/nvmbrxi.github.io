<?php
$formula = "";
for ($i=1;$i<=14;$i++){
	if ($i == 13){
    	$formula .= "*0";
        continue;
    }
	if ($i>1 && $i<=14 && $i%5!=1){
    	$formula .= "+";
    }
    $formula .= "1";
}
echo $formula."<br>";
echo eval("return ".$formula.";");
?>