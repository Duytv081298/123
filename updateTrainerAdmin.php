<?php
session_start();
$idadmin = $_SESSION['idadmin'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Trainer</title>
</head>
<link rel="stylesheet" type="text/css" href="css/styleadd.css">
<body>
	<div class="content" style="padding: 50px 200px 50px 200px">

		<form action="update.php" style="border:1px solid #ccc" method="POST" enctype="multipart/form-data">
			<div class="container">
				<h1>Change Trainer Information</h1>
				<p>Please fill out this form to change trainer information</p>
				<hr>
				<?php 
				require_once'db.php';
				
				if(isset($_GET['adminUpdateTrainer'])){
					$idtrainer = $_GET['adminUpdateTrainer'];
					$sql = "SELECT * FROM trainer where idtrainer =".$idtrainer;
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
                  // output data of each row
						while($row = $result->fetch_assoc()) {

							$_SESSION['idtrainer'] = $row['idtrainer'];
							$idtrainer = $_SESSION['idtrainer'];
							$user =  $row["user"];
							$pass =  $row["pass"];
							$name =  $row["name"];
							$status =  $row["status"];
							?>
							<label for="idtrainer"><b>ID Trainer </b></label> 
							<input type="text" name="idtrainer" required value="<?=$idtrainer;?>" disabled></input>

							<label for="user"><b>User name</b></label> 
							<input type="text" placeholder="Enter User name" name="user" required value="<?=$user;?>"></input>

							<label for="pass"><b>PassWord </b></label>
							<input type="text" placeholder="Enter Password" name="pass" value="<?=$pass;?>"  required></input>

							<label for="name"><b>Trainer Name</b></label>
							<input type="text" placeholder="Enter Trainer Name" name="name" required value="<?=$name;?>"> </input>

							<label for="idadmin"><b>ID Admin </b></label>
							<input type="text" name="idadmin" required value="<?=$idadmin;?>" disabled> </input>

							<label for="status"><b>Enter Trainer's Status</b></label><br/>
        					<input type="radio" name="status" value="male"> Internal<br>
        					<input type="radio" name="status" value="female"> External<br>
							<?php
						}
					}
				}
				?>
				<div class="clearfix">
					<button type="submit" class="addTrainer" name="updateTrainerAdmin">Update Trainer</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
