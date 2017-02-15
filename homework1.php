<?php

$a = 20;
$b = 'blabla';
$c = 7;

// Pechati najgolem broj so if/else

if ($a > $b) {
	if ($a > $c){
		echo $a;
	} else {
		echo $c;
	}
} else {
	if ($b > $c){
		echo $b;
	} else {
		echo $c;
	}
}
echo "<br/>";

// Proveruva dali promenlivite se broevi so if/else

$site_varijabli = array($a, $b, $c); 



for($i = 0; $i < count($site_varijabli); $i++){
	if (is_numeric($site_varijabli[$i])){
		echo $site_varijabli[$i]."<br/>";
	} else {
		echo "Внеси број!"."<br/>";;
	}
}


// Ternaren Operator



for($i = 0; $i < count($site_varijabli); $i++){
	$uslov = (is_numeric($site_varijabli[$i])) ? $site_varijabli[$i].'<br/>' : 'Vnesi Broj!'.'<br/>';
	echo $uslov;
}



?>