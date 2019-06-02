<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Get data</title>
 
</head>
<body>

<?php
  //Gọi file connection.php ở bài trước
  require_once'db.php';
  // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
<<<<<<< HEAD
  if(isset($_POST['user'])&& isset($_POST['pass'])) {
    // lấy thông tin người dùng
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
    //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
    $user = strip_tags($user);
    $user = addslashes($user);
    $pass = strip_tags($pass);
    $pass = addslashes($pass);

	$sql1 = "select * from administrator where user = '$user' and pass = '$pass' ";
    $row1=query($sql1);

    $sql2 = "select * from staff where user = '$user' and pass = '$pass' ";
    $row2=query($sql2);

    $sql3 = "select * from trainer where user = '$user' and pass = '$pass' ";
    $row3=query($sql3);

    if ($row1==true) {
        $_SESSION['user'] = $user;
        header('Location: admin.php');
    }else if($row2==true) {
        $_SESSION['user'] = $user;
        header('Location: Staff.php');
    } else if($row3==true) {
        $_SESSION['user'] = $user;
        header('Location: trainer.php');
    } else
    header('location:Login.php');
    
  }
=======
 
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
  header('location:Staff.php');
}else if ($count2==1) {
  header('location:facebook.com');
}else
header('location:Login.php');


>>>>>>> 00e83b84337840c87925ba9cd42137dca9693946
?>

</body>
</html>
