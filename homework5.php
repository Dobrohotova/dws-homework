<form method="get" action="homework5back.php">
<p>Enter PIN:</p>
User Name:
<input type="text" placeholder="User Name" name="username" value="<?php if(isset($_GET['username'])){ echo $_GET['username'];}?>">
<br/>
<span>Years:</span>
<select name="years">
	<option value="<?php if(isset($_GET['years'])){ echo $_GET['years'];}?>"></option>
	<option value="<?php if(isset($_GET['years'])){ echo $_GET['years'];}?>">28</option>
	<option value="<?php if(isset($_GET['years'])){ echo $_GET['years'];}?>">19</option>
	<option value="<?php if(isset($_GET['years'])){ echo $_GET['years'];}?>">22</option>
	<option value="<?php if(isset($_GET['years'])){ echo $_GET['years'];}?>">24</option>
</select>
<br/>
Gender:
<input type="radio" name="gender" value="<?php if(isset($_GET['gender'])){ echo $_GET['gender'];}?>">Male</input>
<input type="radio" name="gender" value="<?php if(isset($_GET['gender'])){ echo $_GET['gender'];}?>">Female</input>
<br/>
Interested in:
<input type="checkbox" name="interestedin" value="<?php if(isset($_GET['interestedin'])){ echo $_GET['interestedin'];}?>">UI/UX Design</input>
<input type="checkbox" name="interestedin" value="<?php if(isset($_GET['interestedin'])){ echo $_GET['interestedin'];}?>">Graphic Design</input>
<input type="checkbox" name="interestedin" value="<?php if(isset($_GET['interestedin'])){ echo $_GET['interestedin'];}?>">Web Design</input>
<input type="checkbox" name="interestedin" value="<?php if(isset($_GET['interestedin'])){ echo $_GET['interestedin'];}?>">Web Development</input>
<input type="checkbox" name="interestedin" value="<?php if(isset($_GET['interestedin'])){ echo $_GET['interestedin'];}?>">Database Administration</input>
<input type="checkbox" name="interestedin" value="<?php if(isset($_GET['interestedin'])){ echo $_GET['interestedin'];}?>">Programming</input>
<br/>
Level of HTML/CSS knowledge:
<input type="radio" name="htmlcss" value="<?php if(isset($_GET['htmlcss'])){ echo $_GET['htmlcss'];}?>">Basic</input>
<input type="radio" name="htmlcss" value="<?php if(isset($_GET['htmlcss'])){ echo $_GET['htmlcss'];}?>">Good</input>
<input type="radio" name="htmlcss" value="<?php if(isset($_GET['htmlcss'])){ echo $_GET['htmlcss'];}?>">Excellent</input>
<br/>
Password:
<input type="text" placeholder="Password" name="password" value="<?php if(isset($_GET['password'])){ echo $_GET['password'];}?>">
<br/>
Pin:
<input type="text" placeholder="Pin" name="enterpin" value="<?php if(isset($_GET['enterpin'])){ echo $_GET['enterpin'];}?>">
<br/>
Confirm Pin:
<input type="text" placeholder="Confirm Pin" name="confirmpin" value="<?php if(isset($_GET['confirmpin'])){ echo $_GET['confirmpin'];}?>">
<br/>
<input type="checkbox" name="agree" value="<?php if(isset($_GET['agree'])){ echo $_GET['agree'];}?>">I agree to the Terms and Conditions</input>
<br/>
<button type="submit">Log In</button>
</form>


<?php 	



//if(!empty($_GET) > 0)
if(count($_GET) > 0){
	if(isset($_GET['username']) && strlen($_GET['username']) > 5 && isset($_GET['password']) && strlen($_GET['password']) > 5 && isset($_GET['years']) && $_GET['years'] != ''){
		if(isset($_GET['enterpin']) && is_numeric($_GET['enterpin']) && isset($_GET['confirmpin']) && is_numeric($_GET['confirmpin']) && isset($_GET['gender']) && isset($_GET['agree']) && isset($_GET['interestedin']) && isset($_GET['htmlcss'])){
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



