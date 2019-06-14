<?php
session_start();
$idadmin = $_SESSION['idadmin'];
?>

<?php
  $db = mysqli_connect("localhost", "root", "", "website");
  if(isset($_POST['updateTrainerAdmin'])) {
       
        $user =  $_POST["user"];
        $pass =  $_POST["pass"];
        $name =  $_POST["name"];
        $status =  $_POST["status"];
    $sql = "UPDATE `trainer` SET `idtrainer`='$idtrainer',`name`='$name',`user`='$user', `pass`='$pass', `idadmin`='$idadmin',  `status`= '$status' WHERE `idtrainer`= $idtrainer";
    mysqli_query($db, $sql);

}