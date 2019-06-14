<?php
session_start();
$idadmin = $_SESSION['idadmin'];

  $db = mysqli_connect("localhost", "root", "", "website");
  if(isset($_POST['updateTrainerAdmin'])) {
  		$idtrainer = $_SESSION['idtrainer'];
        $user =  $_POST["user"];
        $pass =  $_POST["pass"];
        $name =  $_POST["name"];
        $status =  $_POST["status"];
    $sql = "UPDATE `trainer` SET `idtrainer`= '$idtrainer',`user`='$user',`pass`= '$pass',`name`='$name',`idadmin`='$idadmin',`status`='$status' WHERE `idtrainer`= $idtrainer";
    mysqli_query($db, $sql);
    Header( "Location: adminModifyTrainer.php" );
    
}elseif (isset($_POST['updateStaffAdmin'])) {
		$idstaff = $_SESSION['idstaff'];
        $user =  $_POST["user"];
        $pass =  $_POST["pass"];
        $name =  $_POST["name"];
    $sql = "UPDATE `staff` SET `idstaff`= '$idstaff',`user`='$user',`pass`= '$pass',`name`='$name',`idadmin`='$idadmin' WHERE `idstaff`= $idstaff";
    mysqli_query($db, $sql);
    Header( "Location: adminModifyStaff.php" );



}elseif (isset($_POST['updateAdminProfile'])) {
        $user =  $_POST["user"];
        $pass =  $_POST["pass"];
        $name =  $_POST["name"];
    $sql = "UPDATE `admin` SET `idadmin`= '$idadmin',`user`='$user',`pass`= '$pass',`name`='$name'WHERE `idadmin`= $idadmin";
    mysqli_query($db, $sql);
    Header( "Location: admin.php" );
}
?>