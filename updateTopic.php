<?php
session_start();
$idstaff = $_SESSION['idstaff'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Topic</title>
</head>
<link rel="stylesheet" type="text/css" href="css/styleadd.css">
<body>
	<div class="content" style="padding: 50px 200px 50px 200px">
<form action="update.php" style="border:1px solid #ccc" method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1>Change Topic Information</h1>
    <p>Please fill out this form to change topic information.</p>
    <hr>
    <?php 
				require_once'db.php';
				if(isset($_GET['updateTopic'])){
					$idtopic = $_GET['updateTopic'];
					$sql = "SELECT * FROM topic where idtopic =".$idtopic;
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
                  // output data of each row
						while($row = $result->fetch_assoc()) {
							$name =  $row["name"];
							$description =  $row["description"];
							$idcourse =  $row["idcourse"];
							?>
						<label for="name"><b>ID Topic </b></label> 
						<input type="text" name="idtopic" required value="<?=$idtopic;?>" readonly="true">

						<label for="name"><b>Topic's name</b></label> 
						<input type="text" placeholder="Enter Topic's name" name="name" required value="<?=$name;?>"></input>

						<label for="description"><b>Topic's Description </b></label>
						<input type="text" placeholder="Enter Topic's Description" name="description" value="<?=$description;?>"  required></input>

						<label for="idstaff"><b>ID Staff </b></label>
						<input type="text" name="idstaff" required value="<?=$idstaff;?>" readonly="true"> </input>

						<label for="idcourse"><b>Topic's Course</b></label>
						<input list="idcourse" name="idcourse" value="<?=$idcourse;?>">
						<datalist id="idcourse">
							<?php 
							require_once'db.php';
							$sql = "SELECT * FROM course ";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
				                  // output data of each row
								while($row = $result->fetch_assoc()) {
									?>
									<option><?php echo $row["idcourse"]?>-<?php echo $row["name"]?></option>
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
					<button type="submit" class="addTopic" name="updateTopic">Update Topic</button>
				</div>
			</div>
		</form>
	</div>

</body>
</html>
