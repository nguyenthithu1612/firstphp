
<?php
class createTB
{
    public function create()
    {
    	try {
    		$smt = new DBConnection();
            $qry = $smt->prepare("CREATE TABLE thanhvien (
                                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                    username VARCHAR(30) NOT NULL,
                                    email VARCHAR(50) NOT NULL,
                                    password VARCHAR(50) NOT NULL
                                    )");
            $qry->execute();
            echo "Them Table thanhvien thanh cong!";
    	} catch (PDOException $e) {
		  	echo "Them table thanhvien that bai!";
		    $e->getMessage();
		    // die();
		}
    }
}
?>