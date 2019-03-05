<?php include('conn.php') ?>
<?php
class user {

	public function Insert($name, $email, $pass)
    {
    	try {
           
    		$smt = new DBConnection();
            $qry = $smt->prepare("INSERT INTO `thanhvien`(`username`, `email`, `password`) 
    						VALUES ('".$name."','".$email."','".$pass."')");
            $qry->execute();
            echo "Them thanh vien thanh cong!";
    	} catch (PDOException $e) {
		  	echo "Them thanh vien that bai!";
		    $e->getMessage();
		    // die();
		}
    }

    public function checkLogin($email, $pass)
    {
        try {
            $sql = new DBConnection();
            $qry = $sql->prepare("SELECT * FROM thanhvien WHERE email ='".$email."' AND password ='".$pass."'");
            $qry->execute(array($email,$pass));
            $user = $qry->fetch(PDO::FETCH_ASSOC);

            if($qry->rowCount() >= 1) {
                $_SESSION['username'] = $user['username'];
                $_SESSION['login'] = true;
                header("location: index.php");
            } else {
                echo "Thông tin tài khoản/ mật khẩu không chính xác";
            }
        } catch(PDOException $e)
    {
        echo "Có lỗi không xác định!";
        echo $e->getMessage();
    }
    }
}
?>