
<?php
session_start();
$idstaff = $_SESSION['idstaff'];
?>
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "website");

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get text
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $description = mysqli_real_escape_string($db, $_POST['description']);


    $sql = "INSERT INTO  category (name, description, idstaff) VALUES ('$name', '$description', '$idstaff')";
    // execute query
    mysqli_query($db, $sql);
  }
?>
       
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.css">

	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	
 	<?php 
		if(isset($_GET['del']))
	   {
	   	require_once'db.php';
	   	$idcategory = $_GET['del'];
	    $sql ="DELETE FROM category WHERE idcategory ='". (int)$idcategory ."'";
	    $result = $conn-> query($sql);
	    $message = "Category Deleted!";
		echo "<script type='text/javascript'>alert('$message');</script>";
	   }
	 ?>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">ID Category</th>
								<th class="column2">Category's Name</th>
								<th class="column3">Category's Description</th>
								<th class="column4">Course</th>
								<th class="column5">Update</th>
								<th class="column6">Delete</th>
								
							</tr>
						</thead>
						<tbody>
					<?php 
							require_once'db.php';

							$sql = "SELECT * FROM category ";

							

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row = $result->fetch_assoc()) {
							    	$idcategory =  $row["idcategory"];
							    	?>
								<tr>
									<td class="column1"><?php echo $row["idcategory"]?></td>
									<td class="column2"><?php echo $row["name"]?></td>
									<td class="column3"><?php echo $row["description"]?></td>
									<td class="column4">
					<?php 
							require_once'db.php';
							$sql1 = "SELECT course.name FROM category INNER JOIN course ON category.idcategory=course.idcategory where course.idcategory =".$idcategory;
							$result1 = $conn->query($sql1);
							if ($result1->num_rows > 0) {
							    // output data of each row
							    while($row1 = $result1->fetch_assoc()) {
							    	?>
								<span><?php echo $row1["name"]?></span>

					<?php
									}
									}
									?>


									</td>
									<td class="column5"><button>Update</button></td>

									<td class="column6">
										<a href="modifyCategory.php?del=<?php echo $row["idcategory"]?>"> <input type="button" value="Delete" name="deletecategory"> 
										</a>

									</td>
									
								</tr>
					<?php
									}
									}
									?>
																	
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


</body>
</html>
