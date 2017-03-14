<?php 

$predavach = array(
	'profesor' => 'Dimitar Atanasov',
	'vreme na odrzhuvanje' => 'Vtornik 11:00h',
	'semestar' => 1,
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


