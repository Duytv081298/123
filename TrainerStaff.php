	<?php
	session_start();
	$idtrainer = $_SESSION['idtrainer'];
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="css/style_admin.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover.css">
	</head>

	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">


	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">

			<div class="item active">
				<img src="images/la.jpg" alt="Los Angeles" style="width:100%;">
				<div class="carousel-caption">
					<h1>FPT SOFTWARE</h1>
					<p>Your time is limited, so don't waste it living someone else's life</p>
				</div>
			</div>

			<div class="item">
				<img src="images/chicago.jpg" alt="Chicago" style="width:100%;">
				<div class="carousel-caption">
					<h1>ARTIFICIAL INTELLIGENCE</h1>
					<p>AI has become an essential part of the technology industry</p>
				</div>
			</div>
			
			<div class="item">
				<img src="images/ny.jpg" alt="New York" style="width:100%;">
				<div class="carousel-caption">
					<h1>GREENWICH UNIVERSITY</h1>
					<p>Wisdom is not a product from school, but a lifelong learning process</p>
				</div>
			</div>
			
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- Header -->
	<header  style=" text-align: center; background-color: black; padding-top: 1px; color: white ; box-sizing: border-box; " >

		<h3 style="margin: 20PX">Can anything be sadder than work left unfinishe
		d ?</h3>
		<h1 >YES, WORK NEVER BEGUN - CHRISTINA ROSSETTI</h1>	
		<div class="w3-padding-32">
			<button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey hvr-wobble-vertical" style=" margin: 5px;
			padding: 7px">WelCome</button>
			<button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey hvr-wobble-vertical"  style=" margin: 5px;
			padding: 7px">About</button>
			<button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey hvr-wobble-vertical" style=" margin: 5px;
			padding: 7px">Home</button>
			<a href="Logout.php"><button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey hvr-wobble-vertical"  style=" margin: 5px; padding: 7px; ">Logout</button></a>
		</div>
	</header>
	<body >
		<!-- Modal -->
		<div id="id01" class="w3-modal">
			<div class="w3-modal-content w3-card-4 w3-animate-top">
				<header class="w3-container w3-theme-l1"> 
					<span onclick="document.getElementById('id01').style.display='none'"
					class="w3-button w3-display-topright">×</span>
					<h4>Oh snap! We just showed you a modal..</h4>
					<h5>Because we can <i class="fa fa-smile-o"></i></h5>
				</header>
				<div class="w3-padding">
					<p>Cool huh? Ok, enough teasing around..</p>
					<p>Go to our <a class="w3-btn" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>s
				</div>
				<footer class="w3-container w3-theme-l1">
					<p>Modal footer</p>
				</footer>
			</div>
		</div>

		<div class="w3-row-padding w3-center w3-margin-top">



			<a href="modifyTrainerProfile.php">

				<div class="w3-third" style="width: 31.3333333333% !important ; margin: 1%">
					<?php 
        require_once'db.php';
        $sql = "SELECT * FROM trainer WHERE `idtrainer`= $idtrainer";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
                  // output data of each row
          while($row = $result->fetch_assoc()) {
            $name =  $row["name"];
            ?>
            <div class="overlay"><span style="color: white">
              Hello <?php echo $name;  ?>
            </span></div> 
            <?php
          }
        }
        ?>
					<div class="container">
						<div class="overlay"><span style="color: white">
							Hello <?php echo $name;  ?>
						</span></div> 
						<div class="w3-card w3-container" style="box-sizing: border-box; margin: 0 ">
							<b><h1>User Profile</h1></b><br>
							<img src="images/admin.png" alt="Los Angeles" style="width:30%;padding-bottom: 20%; ">
						</div>
					</div>
				</div>
			</a>


			<a href="viewCourseTrainer.php">
				<div class="w3-third" style="width: 31.3333333333% !important ; margin: 1%">
					<div class="container">
						<div class="overlay">Detail</div> 
						<div class="w3-card w3-container" style="box-sizing: border-box; margin: 0 ">
							<b><h1>View Courses </h1></b><br>
							<img src="images/staff.jpg" alt="Los Angeles" style="width:30%;padding-bottom: 20%; ">
						</div>
					</div>
				</div>
			</a>


			<a href="viewTopicTrainer.php">
				<div class="w3-third" style="width: 31.3333333333% !important; margin: 1%">
					<div class="container">
						<div class="overlay">Detail</div> 
						<div class="w3-card w3-container" style="box-sizing: border-box; margin: 0 ">
							<b><h1>View Topics </h1></b><br>
							<img src="images/trainer.png" alt="Los Angeles" style="width:30%;padding-bottom: 20%; ">
						</div>
					</div>
				</div>
			</a>

			
		</div>
	</body>


	<footer class="w3-container w3-theme-dark w3-padding-16">
		<table cellspacing="1" cellpadding="10" width= 100% align="center" style=" text-align: center;" >
			<tr>
				<td style="padding: 20px"><a href="">About Us</a></td>
				<td ><a href="">Our Resource Center</a></td>
				<td ><a href="">Industries</a></td>
				<td ><a href="">FPT Software Insight</a></td>
			</tr>
			<tr>
				<td><p>About FPT Software</p></td>
				<td><p>Innovation Hub</p></td>
				<td><p>Automotive</p></td>
				<td><p>Customer </p></td>
			</tr>
			<tr>
				<td><p>About FPT Software</p></td>
				<td><p>Innovation Hub</p></td>
				<td><p>Automotive</p></td>
				<td><p>Customer </p></td>
			</tr>
			<tr>
				<td><p>About FPT Software</p></td>
				<td><p>Innovation Hub</p></td>
				<td><p>Automotive</p></td>
				<td><p>Customer </p></td>
			</tr>
		</table>
	</footer>




	</html>
