<?php
	try {
    // Chuỗi kết nối
    $conn = new PDO("mysql:host=localhost", 'root', '');
     
    // Thiết lập chế độ exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     $db = "NewDb";
    // Câu truy vấn
    $sql = "CREATE DATABASE $db CHARACTER SET utf8 COLLATE utf8_general_ci ";
     
    // Thực thi câu truy vấn
    $conn->exec($sql);
     
    // Thông báo thành công
    echo "Tạo database thành công";

    // Kết nối db
    $conn = new PDO("mysql:host=localhost;dbname=$db", 'root', '');
     
    // Thiết lập chế độ exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE thanhvien (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			username VARCHAR(30) NOT NULL,
			email VARCHAR(50) NOT NULL,
			password VARCHAR(50) NOT NULL
			)";
	$conn->exec($sql);

	echo "Tạo table thanhvien thành công";
	
}
	catch(PDOException $e)
	{
	    echo $e->getMessage();
	}

// Ngắt kết nối
$conn = null;