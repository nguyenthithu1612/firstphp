<?php
	if(isset($_POST['login'])){
		$email = trim($_POST['email']);
		$pass = md5($_POST['pass']);
		if(isset($_POST['remember'])!=0){
			setcookie('email', $email, time() + 600);
		}
	try{

    $db = "NewDb";

	$conn = new PDO("mysql:host=localhost;dbname=$db", 'root', '');
     
    // Thiết lập chế độ exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 	$sql = "SELECT * FROM thanhvien WHERE email = ? AND password = ?";
 	
 	$query = $conn->prepare($sql);
    $query->execute(array($email,$pass));
  	$user = $query->fetch(PDO::FETCH_ASSOC);

	  	if($query->rowCount() >= 1) {
	  		$_SESSION['username'] = $user['username'];
	  		$_SESSION['login'] = true;
	  		header("location: index.php");
	    } else {
	        echo "Email/Password is wrong";
	    }

    }catch(PDOException $e)
	{
	    echo $e->getMessage();
	}
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

