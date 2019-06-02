<?php
	$hostname='localhost';
	$username = 'root';
	$password = '';
	$dbname = 'website';
	$port=3306;
	function query($sql){
		global $hostname;
		global $username;
		global $password;
		global $dbname;
		global $port;
		$conn = new mysqli($hostname, $username, $password, $dbname, $port);
if($conn-> connect_error){
		//neu không thành công thì dừng chương trình
		echo"connection fail";
		//dừng chương trình
		die($conn-> connect_error);
	}
	//chạy câu truy vấn và lấy kq
	$result = $conn-> query($sql);
	if(!$result){
		// nếu ko có kết quả($result =null) thì dừng chương trình
		echo"SQL execution fail";
		die($conn-> error);
	}
	$rows = mysqli_fetch_all($result);
	return $rows;

	}
	?>

	