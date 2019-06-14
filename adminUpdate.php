<?php
session_start();
$idadmin = $_SESSION['idadmin'];
$idtrainer = $_SESSION['idtrainer'];
?>

<?php
  $db = mysqli_connect("localhost", "root", "", "website");
  if(isset($_POST['updateTrainerAdmin'])) {
        $user =  $_POST["user"];
        $pass =  $_POST["pass"];
        $name =  $_POST["name"];
        $status =  $_POST["status"];
    $sql = "UPDATE `trainer` SET `idtrainer`= '$idtrainer',`user`='$user',`pass`= '$pass',`name`='$name',`idadmin`='$idadmin',`status`='$status' WHERE `idtrainer`= $idtrainer";
    mysqli_query($db, $sql);
    Header( "Location: adminModifyTrainer.php" );
}