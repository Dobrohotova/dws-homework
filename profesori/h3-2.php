<?php 

$predavach = array(
	'profesor' => 'Andreja Jarchevski',
	'vreme na odrzhuvanje' => 'Ponedelnik 11:00h',
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


