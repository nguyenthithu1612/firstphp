
<?php
if(isset($_SESSION['login'])){
echo "<div>Xin chào ".$_SESSION['username']."</div>";
echo "Bạn đã đăng nhập vào: ".date('Y-m-d H:i:s');
?>
<br>
<button onclick="location.href='?page=logout'">Log out</button>
<?php

}
else {
?> 
<ul>
    <li><a href="?page=createDb">Create Database</a</li>
    <li><a href="?page=login">Login</a></li>
    <li><a href="?page=register">Register</a></li>
</ul>
<?php
}
?>
