<?php 

$predavach = array(
	'profesor' => 'Andreja Jarchevski',
	'vreme na odrzhuvanje' => 'Petok 09:00h',
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


