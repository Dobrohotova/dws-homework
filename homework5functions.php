<?php 

function c2f($celsius){
	echo $celsius * 1.8 + 32;
}

c2f(10);

echo '<br/>';


function prost($broj){
	if($broj == 1) {
		return false;
	}
	for($i = 2; $i < $broj; $i++) { 
		if($broj % $i == 0){
			return false;
		}
	} return true;

}



echo prost(5);

?>