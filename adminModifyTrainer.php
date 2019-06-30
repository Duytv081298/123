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
	if(isset($_GET['deletetrainer']))
	{
		require_once'db.php';
		$idtrainer = $_GET['deletetrainer'];
		$sql ="DELETE FROM trainer WHERE idtrainer ='". (int)$idtrainer ."'";
		$result = $conn-> query($sql);
		Header( "Location: adminModifyTrainer.php" );
	} 
	?>  
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr style="background: #36304a;">
								<td colspan="5" >

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
											echo "<a href='addtraineradmin.php'>Add</a>"; 
											?>
										</button>
									</div>
								</th>
							</tr>
							<tr style="background: #2b303b; height: 5px; ">
								<th colspan="7">
								</th>
							</tr>
							<tr class="table100-head">
								<th class="column1">ID Trainer</th>
								<th class="column2">Trainer's Name</th>
								<th class="column3">User Name</th>
								<th class="column4">Password</th>
								<th class="column4">Type of work</th>
								<th class="column5">Update</th>
								<th class="column6">Delete</th>
								
							</tr>
						</thead>
						<tbody>
							<?php 
							require_once'db.php';
							$sql = "SELECT * FROM trainer ";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
								while($row = $result->fetch_assoc()) {
									$_SESSION['idtrainer'] = $row['idtrainer'];
									$idtrainer = $_SESSION['idtrainer'];
									?>
									<tr>
										<td class="column1"><?php echo $row["idtrainer"]?></td>
										<td class="column2"><?php echo $row["name"]?></td>
										<td class="column3"><?php echo $row["user"]?></td>
										<td class="column4"><?php echo $row["pass"]?></td>
										<td class="column4"><?php echo $row["status"]?></td>
										<td class="column5"><a href="updateTrainerAdmin.php?adminUpdateTrainer=<?php echo $row["idtrainer"]?>"><button type="button" class="btn btn-default" >Update</button></a></td>
										<td class="column6">
											<a class="btn btn-default" href="adminModifyTrainer.php?deletetrainer=<?php echo $row["idtrainer"]?>"onclick="return confirmDelete(this);">
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
		<script>
			function confirmDelete(link) {
				if (confirm("Do you want to delete the account?")) {
					doAjax(link.href, "POST"); 
				}
				return false;
			}
		</script>

	</body>
	</html>
