<?php 


include 'header.php';

switch ($_GET['strana']) {
	case 'AdobeIllustrator':
		include 'profesori/h3-1.php';
	break;
	case 'Komunikacija so klient':
		include 'profesori/h3-2.php';
	break;
	case 'Adobe Photoshop':
		include 'profesori/h3-3.php';
	break;
	case 'Veb Multimedija':
		include 'profesori/h3-4.php';
	break;
	case 'Dizajn Principi':
		include 'profesori/h3-5.php';
	break;
	case 'Osnovi na informatichka tehnologija':
		include 'profesori/h3-6.php';
	break;
	case 'Klientski veb tehnologii':
		include 'profesori/h3-7.php';
	break;
	case 'Internet Marketing':
		include 'profesori/h3-8.php';
	break;
	case 'Premiere Pro':
		include 'profesori/h3-9.php';
	break;
	case 'Implementacija na veb dizajn':
		include 'profesori/h3-10.php';
	break;
	case 'Portfolio na Veb Dizajner':
		include 'profesori/h3-11.php';
	break;
	case 'Dizajn na veb strana':
		include 'profesori/h3-12.php';
	break;
	case 'Razvoj na dinamichna veb strana':
		include 'profesori/h3-13.php';
	break;
	case 'Razvivanje na dinamichen veb sajt':
		include 'profesori/h3-14.php';
	break;
	case 'Serverski Veb Tehnologii so bazi na podatoci':
		include 'profesori/h3-15.php';
	break;
	case 'UX/UI korisnichki principi':
		include 'profesori/h3-16.php';
	break;
	case 'Upravuvanje so veb proekti':
		include 'profesori/h3-17.php';
	break;
	case 'Raspored za site predmeti':
		include 'profesori';;
	break;
}


?>

