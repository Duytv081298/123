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

	$sql1 = "select * from admin where user = '$user' and pass = '$pass' ";
	$result1 = $conn-> query($sql1);
	$row1 = $result1->fetch_assoc();

    $sql2 = "select * from staff where user = '$user' and pass = '$pass' ";
    $result2 = $conn-> query($sql2);
	$row2 = $result2->fetch_assoc();

    $sql3 = "select * from trainer where user = '$user' and pass = '$pass' ";
    $result3 = $conn-> query($sql3);
	$row3 = $result3->fetch_assoc();

    if ($result1->num_rows > 0) {
        $_SESSION['idadmin'] = $row1['idadmin'];
        $_SESSION['logged_in'] = TRUE;
        $_SESSION['role'] = 'admin';
        header('Location: admin.php');
    }else if($result2->num_rows > 0) {
        $_SESSION['idstaff'] = $row2['idstaff'];
        $_SESSION['logged_in'] = TRUE;
        $_SESSION['role'] = 'staff';
        header('Location: TrainingStaff.php');
    } else if($result3->num_rows > 0) {
        $_SESSION['idtrainer'] = $row3['idtrainer'];
        $_SESSION['logged_in'] = TRUE;
        $_SESSION['role'] = 'trainer';
        header('Location: TrainerStaff.php');
    } else
    header('location:Login.php');
  }


?>

</body>
</html>
