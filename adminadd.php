<?php
session_start();
$idadmin = $_SESSION['idadmin'];
?>

<!-- add Category -->

<?php
  $db = mysqli_connect("localhost", "root", "", "website");
  if (isset($_POST['uploadtraineradmin'])) {
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $user = mysqli_real_escape_string($db, $_POST['user']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);
  $status = mysqli_real_escape_string($db, $_POST['status']);
  $sql = "INSERT INTO  trainer (name, user, pass, status,idadmin) VALUES ('$name', '$user', '$pass', '$status', '$idadmin')";
  mysqli_query($db, $sql);
  Header( "Location: adminModifyTrainer.php" );
  }elseif (isset($_POST['uploadstaffadmin'])) {
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $user = mysqli_real_escape_string($db, $_POST['user']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);
  $sql = "INSERT INTO  staff (name, user, pass,idadmin) VALUES ('$name', '$user', '$pass', '$idadmin')";
  mysqli_query($db, $sql);
  Header( "Location: adminModifyStaff.php" );
  }
?>