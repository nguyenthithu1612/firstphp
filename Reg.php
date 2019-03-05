<form method="POST" role="form" id="form-rg">
	<div>
		<h3>REGISTER</h3>
		<div> 
			<label for="">Your Name:</label>
			<input type="text" name="name" id="name">
			<p style="color:red;display: none;" class="error errorName"></p>
		</div>
		<div>
			<label>Email:</label>
			<input type="email" name="email" id="email">
			<p style="color:red;display: none;" class="error errorEmail"></p>
		</div>
		<div>
			<label for="">Password:</label>
			<input type="password" name="pass" id="pass">
			<p style="color:red;display: none;" class="error errorPass"></p>
		</div>
		<div>
			<label for="">Confirm password:</label>
			<input type="password" name="passConf" id="passConf">
			<p style="color:red;display: none;" class="error errorPassConf"></p>
		</div>
		<div>
			<input type="submit" name="reg" value="Submit">
			<input type="reset" value="Reset">
		</div>
	</div>

</form>

<?php
	if(isset($_POST['reg'])){
		$a = $_POST['name'];
		$b = $_POST['email'];
		$c = md5($_POST['pass']);
	include('user-class.php');
	$insertMem = new user() ;
	$insertMem->Insert($a, $b, $c);
	}
 ?>