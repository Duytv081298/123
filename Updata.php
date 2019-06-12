<?php
session_start();
$idstaff = $_SESSION['idstaff'];
$user = $_SESSION['user'];
$pass = $_SESSION['pass'];
$name = $_SESSION['name'];
?>

<?php
  $db = mysqli_connect("localhost", "root", "", "website");
  if (isset($_POST['updataStaff'])) {
    $idstaff = mysqli_real_escape_string($db, $_POST['idstaff']);
    $user = mysqli_real_escape_string($db, $_POST['user']);
    $pass = mysqli_real_escape_string($db, $_POST['pass']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $sql = "UPDATE `staff` SET `idstaff`='$idstaff',`user`='$user',`pass`='$pass',`name`='$name' WHERE `idstaff`= $idstaff";
    mysqli_query($db, $sql);
    Header( "Location: modifyCategory.php" );
}