<form method="get" action="homework4back.php">
<p>Enter PIN:</p>
User Name:
<input type="text" placeholder="User Name" name="username">
<br/>
Gender:
<input type="radio" name="gender" value="">Male</input>
<input type="radio" name="gender" value="">Female</input>
<br/>
Password:
<input type="text" placeholder="Password" name="password">
<br/>
Pin:
<input type="text" placeholder="Pin" name="enterpin">
<br/>
Confirm Pin:
<input type="text" placeholder="Confirm Pin" name="confirmpin">
<br/>
<button type="submit">Log In</button>
</form>


<?php 	



if(count($_GET) > 0){
	if(isset($_GET['username']) && strlen($_GET['username']) > 6 && strlen($_GET['username']) < 10 && (preg_match('/[^A-Za-z0-9\-]/', ($_GET['username'])) == 0) && isset($_GET['password']) && strlen($_GET['password']) > 6 && strlen($_GET['password']) < 10 && (preg_match('/[a-zA-Z]/', ($_GET['password']) >= 1)) && (preg_match('/\d/', ($_GET['password']) >= 1)) && (preg_match('/[#$]/', ($_GET['password']) >= 1)) && isset($_GET['gender'])) {
		if(isset($_GET['enterpin']) && is_numeric($_GET['enterpin']) && strlen($_GET['enterpin']) = 4 && isset($_GET['confirmpin']) && is_numeric($_GET['confirmpin']) && strlen($_GET['confirmpin']) = 4){
				if($_GET['confirmpin'] === $_GET['enterpin']){
					echo "Pinovite se isti i validni";
				} else {
					echo 'Validni ama razlichni pinovi<br/>';
				}
		} else {
		 echo 'Nevaliden pin!';
		}
	} else {
		echo 'Nevaliden user name i password i/ili godini';
	}
}








?>



