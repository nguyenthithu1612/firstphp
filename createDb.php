<?php include('conn.php'); ?>
<?php include('createDb-class.php'); ?>
<?php include('createTb-class.php'); ?>
<?php 
$createDB = new createDB();
$createDB->create($_SESSION['dbName']);
$createTb = new createTB();
$createTb->create();
?>

