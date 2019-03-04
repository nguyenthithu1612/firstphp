<?php 
 if(isset($_GET['page'])){$page=$_GET['page'];}else{$page="";}
switch($page) {
	case "login":
		include('login.php');
		break;
	case "register":
		include('Reg.php');
		break;
	case "logout":
		include('logout.php');
		break;
	case "createDb":
		include('createDb.php');
		include('home.php');
		break;
	default:
		include('home.php');
}
?>