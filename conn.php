<?php
//Nhap ten db
$_SESSION['dbName'] = 'newDb';

class Connection extends PDO
{
    public function __construct()
    {
        $host='mysql:host=localhost';
        $user='root';
        $password='';
        parent::__construct($host,$user,$password);
        $this->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
}

class DBConnection extends PDO
{
    public function __construct()
    {
    	try{
			$dbName = $_SESSION['dbName'];
    		$host='mysql:host=localhost;dbname='.$dbName;
	        $user='root';
	        $password='';
	        parent::__construct($host,$user,$password);
	        $this->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	}catch (PDOException $e) {
		    echo "Kết nối database thất bại";
		    $e->getMessage();
		    die();
		}
	}
}
?>
