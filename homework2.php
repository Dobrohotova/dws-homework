<?php 

$student = array(
	  'Dobrohotova' => 'Irina', 
	  'Stojkovski' => 'Stefan', 
	  'Blazhevski' => 'Stefan',
	  'Postolovski' => 'Martin',
	  'Danev' => 'Martin',
);



$max = 0;
$zbor = '';

foreach ($student as $prezime => $ime) {
	if(strlen($prezime.$ime) > $max){
		$zbor = $prezime.' '.$ime;
		$max = strlen($prezime.$ime);
	}
}

echo '<br/>';

echo 'Najdolgoto ime i prezime e: '.$zbor;


$maxx = 100;
$zborr = '';

foreach($student as $prezime => $ime){
	if(strlen($prezime.$ime) < $maxx){
		$zborr = $prezime.' '.$ime;
		$maxx = strlen($prezime.$ime);
	}
}
echo '<br/>';

echo 'Najkratkoto ime i prezime e: '.$zborr;

echo '<br/>';

echo $zbor.' ima najdolgo ime i prezime so '.$max.' bukvi, a '.$zborr.' ima najkratko ime i prezime so '.$maxx.' bukvi';


?>