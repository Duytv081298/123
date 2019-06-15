<?php
session_start();
$idstaff = $_SESSION['idstaff'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Course</title>
</head>
<link rel="stylesheet" type="text/css" href="css/styleadd.css">
<body>
	<div class="content" style="padding: 50px 200px 50px 200px">

		<form action="update.php" style="border:1px solid #ccc" method="POST" enctype="multipart/form-data">
			<div class="container">
				<h1>Change Course Information</h1>
				<p>Please fill out this form to change course information</p>
				<hr>
				<?php 
				require_once'db.php';
				
				if(isset($_GET['updateTrainer'])){
					$idtrainer = $_GET['updateTrainer'];
					$sql = "SELECT * FROM trainer where idtrainer =".$idtrainer;
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
                  // output data of each row
						while($row = $result->fetch_assoc()) {
							$idtrainer =  $row["idtrainer"];
							$name =  $row["name"];
							$idstaff =  $row["idstaff"];
							$idclass =  $row["idclass"];
							?>
							<label for="name"><b>ID Trainer </b></label>
							<input type="text" name="idtrainer" value="<?=$idtrainer;?>" readonly="true"></input>

							<label for="name"><b>Trainee's name</b></label> 
							<input type="text" placeholder="Enter Trainee's name" name="name" required value="<?=$name;?>"></input>

							<label for="idstaff"><b>ID Staff </b></label>
							<input type="text" name="idstaff" required value="<?=$idstaff;?>" readonly ="true"> </input>

							<label for="idclass"><b>Class</b></label>
							<input list="idclass" name="idclass" value="<?=$idclass;?>">
							<datalist id="idclass">
								<?php 
								require_once'db.php';

								$sql = "SELECT * FROM class ";

								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
				                  // output data of each row
									while($row = $result->fetch_assoc()) {
										?>
										<option><?php echo $row["idclass"]?>-<?php echo $row["name"]?></option>
										<?php
									}
								}
								?>
							</datalist>
							<?php
						}
					}
				}
				?>
				<br/><br/>
				<label for="status"><b>Enter Trainer's Status</b></label><br/>
				<input type="radio" name="status" value="male"> Internal<br>
				<input type="radio" name="status" value="female"> External<br>
				<div class="clearfix">
					<button type="submit" class="addCourse" name="updateTrainer">Update Trainer</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
