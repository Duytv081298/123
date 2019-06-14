<?php
session_start();
$idadmin = $_SESSION['idadmin'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/detail.css">
	<link rel="stylesheet" type="text/css" href="search.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php 
	if(isset($_GET['deletestaff']))
	{
		require_once'db.php';
		$idstaff = $_GET['deletestaff'];
		$sql ="DELETE FROM staff WHERE idstaff ='". (int)$idstaff ."'";
		$result = $conn-> query($sql);
		Header( "Location: adminModifyStaff.php" );
	} 
	?>  
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr style="background: #36304a;">
								<td colspan="4" >

									<div class="container-3">
										<span class="icon"><i class="fa fa-search"></i></span>
										<input type="search" id="search" placeholder="Search..." />
									</div>
								</td>
								<th colspan="1" >
									<div style="  text-align: center;" >
										<button type="button" style="width: 91px !important;height: 34px !important;" class="btn btn-default"  >
											<?php
											$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
											echo "<a href='admin.php'>Go Back</a>"; 
											?>
										</button>
									</div>
								</th>

								<th colspan="1" >
									<div style="  text-align: center;" >
										<button type="button" class="btn btn-default" >
											<?php
											$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
											echo "<a href='addstaffadmin.php'>Add</a>"; 
											?>
										</button>
									</div>
								</th>
							</tr>
							<tr style="background: #2b303b; height: 5px; ">
								<th colspan="6">
								</th>
							</tr>
							<tr class="table100-head">
								<th class="column1">ID Staff</th>
								<th class="column2">Staff's Name</th>
								<th class="column3">User Name</th>
								<th class="column4">Password</th>
								<th class="column5">Update</th>
								<th class="column6">Delete</th>
								
							</tr>
						</thead>
						<tbody>
							<?php 
							require_once'db.php';
							$sql = "SELECT * FROM staff ";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
								while($row = $result->fetch_assoc()) {
									$_SESSION['idstaff'] = $row['idstaff'];
									$idstaff = $_SESSION['idstaff'];
									?>
									<tr>
										<td class="column1"><?php echo $row["idstaff"]?></td>
										<td class="column2"><?php echo $row["name"]?></td>
										<td class="column3"><?php echo $row["user"]?></td>
										<td class="column4"><?php echo $row["pass"]?></td>
										<td class="column5"><a href="updateStaffAdmin.php?adminUpdateStaff=<?php echo $row["idstaff"]?>"><button type="button" class="btn btn-default" >Update</button></a></td>
										<td class="column6">
											<a class="btn btn-default" href="adminModifyStaff.php?deletestaff=<?php echo $row["idstaff"]?>">
  											<i class="fa fa-trash-o fa-lg"></i> Delete</a>
											
										</td>

									</tr>

									<?php
								}
							}
							?>

						</tbody>
						<tr>
							<td></td>
							<td colspan="7" style="color: red">Type of Work: 1. Internal 2.Extenal</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>


</body>
</html>
