<?php
session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css" type="text/css">
	<title>Vin De France</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="css/hover-min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 80%;
      margin: auto;
  }
  </style>
	
</head>
<body>

	<!-- phần top -->
		<div class="top">
			<div class="top-L">
				<form action="timkiem.java">
					<div id="containSearch">
						<input type="text" placeholder="Search" style="padding: 6px;padding-right: 45px; border-radius: 20px;">
						<input id="btnsearch" type="submit" value="">
					</div>

				</form>
			</div>
			<div class="top-R" >
				<ul>
					
					<li>
					<span style="color: white">
						<?php echo $_SESSION['user'];  ?>
					</span><br>
					<li style="padding: 0px; margin: 12px;"><img src="anhlgin.png" width="30px"; height="30px"></li>
				</ul>
			</div>
			<div class="giohang">
				<a href="#"><img src="cart-1.png" alt="hình giỏ hàng"></a>
				<p><a href="hinhgiohang">Empty Cart</a></p>
			</div>
			<p class="hvr-wobble-vertical"><a href="VindeFrance.php" style="text-decoration: none; color: white;">Log out </a></p>

		</div>
	<!-- phần Logo-->
	<div class="logo">
		<div class="logo-Left">
			<ul>
		<li><img src="logo1.png" width="70px" height="70px" style="margin:5px;margin-left: 50px"></li>
		<li><h1 style="margin-left: 15px; color: #d04141;
    font-family: cursive;">
		VIN DE FRANCE</h1></li>
			</ul>
		</div>
		
		<div class="logo-Right">
			<ul>
					<li><a href="VindeFrance.php" class="hvr-underline-from-center"> Home</a></li>
					<li><a href="VindeFrance.php" class="hvr-underline-from-center"> 

<?php include 'catalogy-list2.php';?>
</a></li>
					
					
				</ul>

		</div>
	</div>



  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="banner.jpg" alt="Chania" width="460" height="345">
       <!--  <div class="carousel-caption">
         <h3>Vin De France</h3>
         <p>Can't Resist the Mist!</p>
       </div> -->
      </div>

      <div class="item">
        <img src="banner2.jpg" alt="Chania" width="460" height="345">
        <!-- <div class="carousel-caption">
          <h3>Vin De France</h3>
          <p>Great Tasting Wine with a Splash of Fruit </p>
        </div> -->
      </div>
    
      <div class="item">
        <img src="banner3.jpg" alt="Chania" width="460" height="345">
        <!-- <div class="carousel-caption">
          <h3>Vin De France</h3>
          <p>Just what you've been looking for</p>
        </div> -->
      </div>

     

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- chi tiết sp-->

<div class="container-fluid" style="margin: 25px;
    margin-left: 230px;">
<?php include 'adminProduct-list.php';?>
</div>


<!-- chat-->
<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

	<!-- phần thông tin-->
	<div class="container">
		<div class="info">
			<h3>Follow Us</h3>
			<ul>
				<li><a href="https://www.facebook.com/buitam0098" class="hvr-wobble-vertical">
						<span class="social" id="facebook"></span>
						<span class="txtSocial">FaceBook</span>
					</a></li>

				<li><a href="https://www.facebook.com/buitam0098" class="hvr-wobble-vertical">
						<span class="social" id="Twitter"></span>
						<span class="txtSocial">Twitter</span>
					</a></li>
				<li><a href="https://www.facebook.com/buitam0098" class="hvr-wobble-vertical">
						<span class="social" id="Google"></span>
						<span class="txtSocial">Google+</span>
					</a></li>
			
		</ul>
		</div>


		
		<div class="info">
				<h3>Information</h3>
				<ul>
					<li><a href="#" >
							<span>Specials</span>
						</a></li>
	
					<li><a href="#" >
							<span>New Products</span>
						</a></li>


					<li><a href="#" >
							<span>Our Stores</span>
						</a></li>


					<li><a href="#" >
								<span>Contact Us</span>
					</a></li>


					<li><a href="#" >
							<span>Top Sellers</span>
						</a></li>
				</ul>
		</div>

		<div class="info">
				<h3>My Account</h3>
				<ul>
					<li><a href="#" >
							<span>My Account</span>
						</a></li>
	
					<li><a href="#" >
							<span>My Credit slips</span>
						</a></li>


					<li><a href="#" >
							<span>My Merchandise returns</span>
						</a></li>


					<li><a href="#" >
								<span>My Personal info</span>
					</a></li>


					<li><a href="#" >
							<span>My Addresses</span>
						</a></li>
				</ul>
		</div>

		<div class="info">
				<h3>Store Information</h3>
				<ul>
					<p style="color:gray">VIN DE FRANCE,<br>
						28 Pham Van Dong,<br>
						Thanh Xuan,Ha Noi.<br>
						+0328620615 </p>
						<li><a href="#" >
							<span>Tambtgcs17655@fpt.edu.vn</span>
						</a></li>
				</ul>
		</div>
		<hr class="phanvung">

		</div>

		
	<!-- phần footer-->
<div class="footer">
	<div class="container-fluid" style="margin-left: 150px;">
	<div class="childfooter" id="leftfooter">
		<form action="#">
			<input type="text" placeholder="Enter your Email" style="border: 1px solid #484747; padding: 8px;">
			<input type="submit" value="Subcrible" style=" padding: 7px;
			padding-left: 20px;
			text-align: center;
			padding-right: 20px;
			background-color: white;
			background: gray;
			border: 1px solid #484747;">
		</form>
	</div>
	<div class="childfooter" id="rightfooter" style="padding: 20px; padding-left: 40px">© 2018 VIN DE FRANCE. All Rights Reserved | Design by Buitam</div>

	</div>
</div>
</body>
</html>