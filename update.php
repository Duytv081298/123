<?php
session_start();
$idstaff = $_SESSION['idstaff'];
$user = $_SESSION['user'];
$pass = $_SESSION['pass'];
$name = $_SESSION['name'];
$idadmin = $_SESSION['idadmin'];
?>

<?php
  $db = mysqli_connect("localhost", "root", "", "website");
  if (isset($_POST['updataStaff'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $sql = "UPDATE `staff` SET `idstaff`='$idstaff',`user`='$user',`pass`='$pass',`name`='$name', `idadmin`= '$idadmin' WHERE `idstaff`= $idstaff";
    mysqli_query($db, $sql);
    Header( "Location: TrainingStaff.php" );
}elseif(isset($_POST['updateCourse'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $idcategory = $_POST['idcategory'];
    $idcourse = $_POST['idcourse'];
    $sql = "UPDATE `course` SET `idcourse`='$idcourse',`name`='$name',`description`='$description', `idstaff`='$idstaff', `idcategory`= '$idcategory' WHERE `idcourse`= $idcourse";
    mysqli_query($db, $sql);
    Header( "Location: modifyCourse.php" );
}elseif(isset($_POST['updateTopic'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $idtopic = $_POST['idtopic'];
    $idcourse = $_POST['idcourse'];
    $sql = "UPDATE `topic` SET `idtopic`='$idtopic',`name`='$name',`description`='$description', `idstaff`='$idstaff', `idcourse`= '$idcourse' WHERE `idtopic`= $idtopic";
    mysqli_query($db, $sql);

}