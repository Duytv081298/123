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
	</div>

	<div class="main">
		<div class="navb">
			<ul>
				<?php 
 					require_once('./Cunshopconnector.php');
					$conn = new Cunshopconnector();
					$sql = "Select * from category";
					$rows = $conn -> runQuery($sql);
					
					foreach($rows as $r)
					{
				?> 
					<li><a href="Cunshopdetail.php?Categoryid=<?=$r['Categoryid']?>"><?=$r['Categoryname']?></a></li>

				<?php 
					}
				?>
			</ul>	
		</div>
		<div class="sanphamchitiet">
			<?php
			if (isset($_GET['prid'])) {
				require_once('./Cunshopconnector.php');
			$conn = new Cunshopconnector();
			$sql = "Select * From product WHERE Productid =".$_GET['prid'];
			$rows = $conn->runQuery($sql);
			for ($i=0; $i < count($rows) ; $i++) { 
				?>
				<form action="">
				<div class="Chitietsanpham1">
					<div class="anh"><img src="<?=$rows[$i]['Images']?>" alt="">
					</div>
					<div class="chitiet">	<br>Tên Sản Phẩm: <?=$rows[$i]['Productname']?> <br> <br>
											Nhà sản Xuất: <?=$rows[$i]['Manufacturer']?> <br> <br>
											<hr> <br>
											Giá Sản Phẩm: <?=$rows[$i]['Unitprice']?>vnđ <br> <br>
											Số lượng sản phẩm:<?=$rows[$i]['Stock']?> <br> <br>
											Số lượng sản phẩm bạn muốn mua: <input type="number" style="width: 100px;"> <br> <br> <br>
											<a href=""><input type="button" value="Mua Ngay" style=" background-color: #FF7302; text-decoration-color: #FFFFFF; width:40%; height: 30px; margin: 20px" ></a>
											<a href=""><input type="button" value="Thêm vào giỏ hàng" style=" background-color: #FF7302; text-decoration-color: #FFFFFF; width:40%; height: 30px; margin: 15px" ></a>
					</div>
				</div>
				</form>
				<?php
			}
			}
			
			?>
			
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


</body>
</html>

