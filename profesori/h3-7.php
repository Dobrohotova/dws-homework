<?php 

$predavach = array(
	'profesor' => 'Bojan Gavrovski',
	'vreme na odrzhuvanje' => 'Chetvrtok 09:00h',
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


