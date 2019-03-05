
<?php
class createDB
{
    public function create($dbName)
    {
    	try {
    		$smt = new Connection();
            $qry = $smt->prepare("CREATE DATABASE ".$dbName." CHARACTER SET utf8 COLLATE utf8_general_ci");
            $qry->execute();
            echo "Tao Database thanh cong!";
    	} catch (PDOException $e) {
		  	echo "Tao Database that bai!";
		    $e->getMessage();
		    // die();
		}
    }
}
?>