<?php 

$predavach = array(
	'profesor' => 'Gorjan Ilievski',
	'vreme na odrzhuvanje' => 'Sreda 11:00h',
	'semestar' => 2,
);



?>


<table border="1">
	<?php foreach ($predavach as $key => $value) { ?>
		<tr>
			<td><?=$key?></td>
			<td><?=$value?></td>
		</tr>
	<?php } ?>
</table>


