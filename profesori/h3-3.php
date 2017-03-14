<?php 

$predavach = array(
	'profesor' => 'Miroslav Klampfer',
	'vreme na odrzhuvanje' => 'Vtornik 09:00h',
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


