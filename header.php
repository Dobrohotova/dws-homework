<?php 


$predmeti = array('AdobeIllustrator', 'Komunikacija so klient', 'Adobe Photoshop', 'Veb Multimedija', 'Dizajn Principi', 'Osnovi na informatichka tehnologija', 'Klientski veb tehnologii', 'Internet Marketing', 'Premiere Pro', 'Implementacija na veb dizajn', 'Portfolio na Veb Dizajner', 'Dizajn na veb strana', 'Razvoj na dinamichna veb strana', 'Razvivanje na dinamichen veb sajt', 'Serverski Veb Tehnologii so bazi na podatoci', 'UX/UI korisnichki principi', 'Upravuvanje so veb proekti', 'Raspored za site predmeti');

?>


<?php foreach ($predmeti as $indeks => $predmet) { ?>
	<ul>
		<li><a href="?strana=<?=$predmet?>"><?=$predmet?></a></li>
	</ul>
<?php } ?>

