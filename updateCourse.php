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
				
				if(isset($_GET['updateCourse'])){
					$idcourse = $_GET['updateCourse'];
					$sql = "SELECT * FROM course where idcourse =".$idcourse;
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
                  // output data of each row
						while($row = $result->fetch_assoc()) {
							$name =  $row["name"];
							$description =  $row["description"];
							$idcategory =  $row["idcategory"];
							?>
							<label for="name"><b>ID Course </b></label> 
							<input type="text" name="idcourse" required value="<?=$idcourse;?>">

							<label for="name"><b>Course's name</b></label> 
							<input type="text" placeholder="Enter Course's name" name="name" required value="<?=$name;?>"></input>

							<label for="description"><b>Course's Description </b></label>
							<input type="text" placeholder="Enter Course's Description" name="description" value="<?=$description;?>"  required></input>

							<label for="idstaff"><b>ID Staff </b></label>
							<input type="text" name="idstaff" required value="<?=$idstaff;?>" disabled> </input>

							<label for="idcategory"><b>Course's Category</b></label>
							<input list="idcategory" name="idcategory" value="<?=$idcategory;?>">
							<datalist id="idcategory">
								<?php 
								require_once'db.php';

								$sql = "SELECT * FROM category ";

								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
				                  // output data of each row
									while($row = $result->fetch_assoc()) {
										?>
										<option><?php echo $row["idcategory"]?>-<?php echo $row["name"]?></option>
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
					<button type="submit" class="addCourse" name="updateCourse">Update Course</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
