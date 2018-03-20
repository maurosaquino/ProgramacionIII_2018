<?php

$var1 = "3";
$var2 = "11";
$var3 = "2312";

$masgrande = $var1;

if ($var1 < $var2){
	
	$masgrande = $var2;
}

elseif ($var1 < $var3){

	$masgrande = $var3;
}


	

echo $var1;
echo $masgrande;
?>