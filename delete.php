<?php
session_start();
$idstaff = $_SESSION['idstaff'];
?>



<?php 
	if(isset($_POST['deletecategory']))
	{
		require_once'db.php';
		$idcategory = $_POST['deletecategory'];
		$sql ="DELETE FROM category WHERE idcategory ='". (int)$idcategory ."'";
		$result = $conn-> query($sql);
		Header( "Location: modifyCategory.php" );
	}
?> 
