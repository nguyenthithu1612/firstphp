
<?php session_start(); ?>
<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
<!DOCTYPE html>

<html>
<head>
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
	<script src="js/validate.js"></script>
</head>
<body>
	<button onclick="location.href='index.php'">HOME</button>
	<?php 
		require_once('loadpage.php');
	?>
</body>
</html>

​

