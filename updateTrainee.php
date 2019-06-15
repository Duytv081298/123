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
				
				if(isset($_GET['updateTrainee'])){
					$idtrainee = $_GET['updateTrainee'];
					$sql = "SELECT * FROM trainee where idtrainee =".$idtrainee;
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
                  // output data of each row
						while($row = $result->fetch_assoc()) {
							$idtrainee =  $row["idtrainee"];
							$name =  $row["name"];
							$age =  $row["age"];
							$mainlanguage =  $row["mainlanguage"];
							$experience =  $row["experience"];
							$idclass =  $row["idclass"];
							?>
							<label for="name"><b>ID Trainee </b></label>
							<input type="text" name="idtrainee" value="<?=$idtrainee;?>" readonly="true"></input>

							<label for="name"><b>Trainee's name</b></label> 
							<input type="text" placeholder="Enter Trainee's name" name="name" required value="<?=$name;?>"></input>

							<label for="description"><b>Trainee's Age </b></label>
							<input type="text" placeholder="Enter Trainee's Age" name="age" value="<?=$age;?>"  required></input>

							<label for="description"><b>Main Programming Language </b></label>
							<input type="text" placeholder="Enter Programming Language" name="mainlanguage" value="<?=$mainlanguage;?>"  required></input>

							<label for="description"><b>Experience details</b></label>
							<input type="text" placeholder="Enter Experience" name="experience" value="<?=$experience;?>"  required></input>

							<label for="idstaff"><b>ID Staff </b></label>
							<input type="text" name="idstaff" required value="<?=$idstaff;?>" readonly ="true"> </input>

							<label for="idclass"><b>Trainee's Class</b></label>
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
				<div class="clearfix">
					<button type="submit" class="addCourse" name="updateTrainee">Update Course</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
