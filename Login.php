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
?>

</body>
</html>
