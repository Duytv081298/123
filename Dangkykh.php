<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="header">
			<div class="nava">
			<ul>
				<li><a href="http://localhost/123/Cunshop.php">Trang chủ</a></li>
				<li><a href="">Kiểm tra đơn hàng</a></li>
				<li><a href="">Đăng nhập</a></li>
				<li><a href="http://localhost/123/Dangkykh.php">đăng ký</a></li>
				<li><a href="http://localhost/123/admin.php">Admin</a></li>
			</ul>
			</div>
		 	<div class="banner">
		 		<div class="Home">
					<a href="http://localhost/123/Cunshop.php">Cun Shop</a>
				</div>
				<div class="Search">
					<div class="Search1">
						<form class="example" action="Search.php" method="get">
		  				<input type="text" placeholder="Search.." name="search">
		  				<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</div>
		 	</div>
	</div>
	<div class="main">
		<div >
			<div >
				<table align="center" cellspacing="0" cellpadding="0" width="50%">
					<tr>
						<td><h1>Tạo tài khoản Cun Shop</h1></td>
						<td style="padding-left: 200px">Bạn đã là thành viên?<a href="http://localhost/123/Dangnhap.php">Đăng Nhập</a> tại đây</td>
					</tr>
				</table>
			</div>
			<?php 
				require_once('./Cunshopconnector.php');
				if(isset($_POST['Custid']))
				{
					//Lấy dữ liệu gửi lên
					$Custid = $_POST['Custid'];
					// insert dữ liệu
					$Fullname = $_POST['Fullname'];	
					$Address = $_POST['Address'];
					$Postalcode = $_POST['Postalcode'];
					$City = $_POST['City'];
					$Country = $_POST['Country'];
					$Phone = $_POST['Phone'];
					$Fax = $_POST['Fax'];
					$Tendangnhap = $_POST['Tendangnhap'];
					$Password = $_POST['Password'];
					$sql = "INSERT INTO customers(Custid, Fullname,  Address, Postalcode, City, Country, Phone, Fax, Tendangnhap, Password)  VALUES (". (int)$Custid .",'". $Fullname ."',". $Address .", '". $Postalcode."',   ". $City .", ". $Country .",    ". $Phone .",   ". $Fax .", ". $Tendangnhap .",". (int)$Password .")";
					$sql1 ="SELECT * FROM customers WHERE Custid =".$_POST['Custid'];
					$conn = new Cunshopconnector();
					$row = $conn -> runQuery($sql1);
					if (count($row)>0) {
						$mess = "Error, ID existed";
						echo "<script type='text/javascript'>alert('$mess'); window.history.back();</script>";
						} 
					else {
						$conn -> execStatement($sql);
						$message = "Đã Thêm thông tin khách hàng";
						echo "<script type='text/javascript'>alert('$message');</script>";
						}
				}
			 ?>
			<div  class="dangky2" >
				<form action="admin.php" method="POST">
					
	 				<table  cellspacing="40" cellpadding="0" >
	 					<tr>
	 						<td>ID khách hàng <SPAN style="color: red">*</SPAN></td>
	 						<th colspan=""><input type="text" name="Custid"required></th>
	 						<th></th>
	 						<td>Tên đăng nhập <SPAN style="color: red">*</SPAN></td> 
	 						<th><input type="text" name="Tendangnhap"required></th>

	 					</tr>
	 					<tr>
	 						<td>Họ Tên <SPAN style="color: red">*</SPAN></td>
	 						<th><input type="text" name="Fullname"required></th>
	 						<th></th>
	 						<td>Mật khẩu <SPAN style="color: red">*</SPAN></td>
	 						<th><input type="text" name="Password"required></th>
	 					</tr>

	 					<tr>
	 						<td>Địa Chỉ <SPAN style="color: red">*</SPAN></td>
	 						<th><input type="text" name="Address"required></th>
	 						<th></th>
	 						<td>Quốc gia <SPAN style="color: red">*</SPAN></td>
	 						<th><input type="text" name="Country"required></th>
	 					</tr>
	 					<tr>
	 						<td>Thành Phố <SPAN style="color: red">*</SPAN></td>
	 						<th><input type="text" name="City"required></th>
	 						<th></th>
	 						<td>Fax</td>
	 						<th><input type="text" name="Fax"></th>
	 					</tr>
	 					<tr>
	 						<td>Số điện thoại <SPAN style="color: red">*</SPAN></td>
	 						<th><input type="text" name="Phone"required></th>
	 						<th></th>
	 						<td>Mã Bưu Điện </td>
	 						<th><input type="text" name="Postalcode"></th>
	 					</tr>
	 					<tr><td colspan="5" > Vui lòng điền tất cả các thông tin sản phẩm chứa dấu (<SPAN style="color: red">*</SPAN>)</td></tr>
	 					<tr>
	 						<th colspan="5" > <input type="submit" value="Đăng Ký" style=" background-color: #FF7302; text-decoration-color: #FFFFFF; width:25%; height: 30px" ></th>
	 					</tr>
	 				</table>
	 				</form>
			</div>
		</div>
	</div>	
	<div class="footer">
		<table  cellspacing="0" cellpadding="10" width= 100% align="center" >
			<tr >
			<th style="font-size: 17px" >CUNSOP_KÊNH MUA SẮM & DỊCH VỤ TRỰC TUYẾN HÀNG ĐẦU VIỆT NAM!</th>
			<th  rowspan="2" > CÔNG TY TNHH Duy Thắng <br>
 													Giấy CNĐKDN: 289037490 – Ngày cấp: 06/5/2005, được sửa đổi lần thứ 17 ngày 24/7/2017. <br>
 													Cơ quan cấp: Phòng Đăng ký kinh doanh – Sở kế hoạch và Đầu tư hà Nội. <br>
 													Địa chỉ đăng ký kinh doanh: Tầng 71, Tòa Nhà Keangnam, E6, Phạm Hùng, Phường Mễ Trì, Quận Nam Từ Liêm, Hà Nội, Việt Nam <br>  <br><br><br>     @Cunshop 2018
 			</th>
			</tr>
			<tr >
				<td ><div align="center" style="padding-top:0%, width= 20px" >
					
				</style>Mua hàng trực tuyến (mua hàng online) mang lại sự tiện lợi, lựa chọn đa dạng hơn và các dịch vụ tốt hơn cho người tiêu dùng, thế nhưng người tiêu dùng Việt Nam vẫn chưa tận hưởng được những tiện ích đó. Chính vì vậy Cunshop Việt Nam được triển khai với mong muốn trở thành trung tâm mua sắm trực tuyến số 1 tại Việt Nam, nơi bạn có thể chọn lựa mọi thứ để chăm sóc thú cưng của mình, từ thức ăn cho chó, thức ăn cho mèo, chuồng chó, chuồng cho mèo, và các cả quàn áo cho chúng, các dịch vụ chăm sóc dành riêng cho thú cưng... Chúng tôi có tất cả!</div></td>
				
			</tr>
		</table>
	</div>
</form>
</body>
</html>

