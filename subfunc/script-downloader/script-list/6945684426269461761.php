<?php
$a = array_fill(0, 5, 1);
$a = implode('+',$a);

$b = array_fill(0, 4, 1);
$b = implode('+',$b);
$b = substr_replace($b,'*0',3,2);

print_r($a."<br>");
print_r($a."<br>");
print_r($b."<br>");

echo "Hasil: ".eval("return ".$a.$a.$b.";");
?>