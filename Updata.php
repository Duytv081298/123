<?php
session_start();
$idstaff = $_SESSION['idstaff'];
?>

<?php
  $db = mysqli_connect("localhost", "root", "", "website");
  if (isset($_POST['updataStaff'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $sql = "INSERT INTO  category (name, description, idstaff) VALUES ('$name', '$description', '$idstaff')";
    mysqli_query($db, $sql);
    Header( "Location: modifyCategory.php" );
}