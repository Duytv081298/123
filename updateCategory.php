<?php
session_start();
$idstaff = $_SESSION['idstaff'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Category</title>
</head>
<link rel="stylesheet" type="text/css" href="css/styleadd.css">
<body>
	<div class="content" style="padding: 50px 200px 50px 200px">

		<form action="update.php" style="border:1px solid #ccc" method="POST" enctype="multipart/form-data">
			<div class="container">
				<h1>Change Category Information</h1>
				<p>Please fill out this form to change Category information</p>
				<hr>
				<?php 
				require_once'db.php';
				if(isset($_GET['updateCategory'])){
					$idcategory = $_GET['updateCategory'];
					$sql = "SELECT * FROM category where idcategory =".$idcategory;
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
                  // output data of each row
						while($row = $result->fetch_assoc()) {
							$name =  $row["name"];
							$description =  $row["description"];
							?>
							<label for="idcategory"><b>ID Category </b></label> 
							<input type="text" name="idcategory" required value="<?=$idcategory;?>"readonly="true">

							<label for="name"><b>Category's name</b></label> 
							<input type="text" placeholder="Enter Category's name" name="name" required value="<?=$name;?>"></input>

							<label for="description"><b>Category's Description </b></label>
							<input type="text" placeholder="Enter Category's Description" name="description" value="<?=$description;?>"  required></input>

							<label for="idstaff"><b>ID Staff </b></label>
							<input type="text" name="idstaff" required value="<?=$idstaff;?>" readonly="true"> </input>
							<?php
						}
					}
				}
				?>
				<div class="clearfix">
					<button type="submit" class="addCategory" name="updateCategory">Update Category</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
