
<?php 
if(isset($_POST['login'])){
		$email = trim($_POST['email']);
		$pass = md5($_POST['pass']);
		if(isset($_POST['remember'])!=0){
			setcookie('email', $email, time() + 600);
		}
		include('user-class.php');
		$check = new user();
		$check-> checkLogin($email,$pass);
	}
?>
<form method="POST" role="form" id="form-rg">
	<div>
		<h3>REGISTER</h3>
		<div>
			<label>Email:</label>
			<input type="email" name="email" id="email" value="<?php if(isset($_COOKIE['email'])!='') echo $_COOKIE['email']; ?>" >
			<p style="color:red;display: none;" class="error errorEmail"></p>
		</div>
		<div>
			<label for="">Password:</label>
			<input type="password" name="pass" id="pass">
			<p style="color:red;display: none;" class="error errorPass"></p>
		</div>
		<div>
			<input type="checkbox" name="remember" value="1">Remember Me
		</div>
		<div>
			<input type="submit" name="login" value="Submit">
			<input type="reset" value="Reset">
		</div>
		
	</div>

</form>

