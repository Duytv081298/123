
<?php
  //Gọi file connection.php ở bài trước
  require_once'db.php';
  // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
 
$sql0 = "SELECT * FROM administrator WHERE user = '".$_POST['user']."' and password = '".$_POST['pass']."'";
$row0 = mysqli_query($conn, $sql0);
$count0 = mysqli_num_rows($row0);


$sql1 = "SELECT * FROM staff WHERE user = '".$_POST['user']."' and password = '".$_POST['pass']."'";
$row1 = mysqli_query($conn, $sql1);
$count1 = mysqli_num_rows($row1);


$sql2 = "SELECT * FROM trainer WHERE user = '".$_POST['user']."' and password = '".$_POST['pass']."'";
$row2 = mysqli_query($conn, $sql2);
$count2 = mysqli_num_rows($row2);


if ($count0==1) {
header('location:abc.php');
}
else if ($count1==1) {
  header('location:https://youtube.com');
}else if ($count2==1) {
  header('location:facebook.com');
}else
header('location:Login.php');


?>
