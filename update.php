<?php
session_start();
$idstaff = $_SESSION['idstaff'];
?>

<?php
  $db = mysqli_connect("localhost", "root", "", "website");
  if (isset($_POST['updataStaff'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $sql = "UPDATE staff SET idstaff`='$idstaff',user`='$user',`pass`='$pass',`name`='$name'  WHERE `idstaff`= $idstaff";
    mysqli_query($db, $sql);
    Header( "Location: TrainingStaff.php" );
}elseif(isset($_POST['updateCourse'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $idcategory = $_POST['idcategory'];
    $idcourse = $_POST['idcourse'];
    $sql = "UPDATE course SET idcourse`='$idcourse',name`='$name',`description`='$description', idstaff`='$idstaff',idcategory`= '$idcategory' WHERE `idcourse`= $idcourse";
    mysqli_query($db, $sql);
    Header( "Location: modifyCourse.php" );
}elseif(isset($_POST['updateTopic'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $idtopic = $_POST['idtopic'];
    $idcourse = $_POST['idcourse'];
    $sql = "UPDATE topic SET idtopic`='$idtopic',name`='$name',`description`='$description', idstaff`='$idstaff',idcourse`= '$idcourse' WHERE `idtopic`= $idtopic";
    mysqli_query($db, $sql);

}elseif(isset($_POST['updateTrainerAdmin'])) {
        $idtrainer =  $_POST["idtrainer"];
        $user =  $_POST["user"];
        $pass =  $_POST["pass"];
        $name =  $_POST["name"];
        $status =  $_POST["status"];
    $sql = "UPDATE trainer SET idtrainer`='$idtrainer',name`='$name',`user`='$user', pass`='$pass',status`= '$status' WHERE `idtrainer`= $idtrainer";
    mysqli_query($db, $sql);

}