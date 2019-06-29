<?php
session_start();
$idstaff = $_SESSION['idstaff'];
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
	if(isset($_GET['deletecourse']))
	{
		require_once'db.php';
		$mess = "Error, ID existed";
		echo "<script type='text/javascript'>alert('$mess'); window.history.back();</script>";
		$idcourse = $_GET['deletecourse'];
		$sql ="DELETE FROM course WHERE idcourse ='". (int)$idcourse ."'";
		$result = $conn-> query($sql);
		Header( "Location: modifyCourse.php" );
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
										<form class="example" action="searchCourse.php" method="get">
											<span class="icon"><i class="fa fa-search"></i></span>
											<input type="search" id="search" placeholder="Search..." name="search">
										</form>
									</div>
								</td>
								<th colspan="2" >
									<div style="  text-align: center;" >
										<button type="button" class="btn btn-default" >
											<?php
											$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
											echo "<a href='TrainingStaff.php'>Go Back</a>"; 
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
								<th class="column1">ID Course</th>
								<th class="column2">Course's Name</th>
								<th class="column3">Course's Description</th>
								<th class="column4">Topic</th>
								<th class="column5">Update</th>
								<th class="column6">Delete</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							require_once'db.php';
							$sql = "SELECT * FROM course ";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
								while($row = $result->fetch_assoc()) {
									$_SESSION['idcourse'] = $row['idcourse'];
									$idcourse = $_SESSION['idcourse'];
									?>
									<tr>
										<td class="column1"><?php echo $row["idcourse"]?></td>
										<td class="column2"><?php echo $row["name"]?></td>
										<td class="column3"><?php echo $row["description"]?></td>
										<td class="column4">
											<?php 
											require_once'db.php';
											$sql1 = "SELECT topic.name FROM topic INNER JOIN course ON topic.idcourse=course.idcourse where course.idcourse =".$idcourse;

											$result1 = $conn->query($sql1);
											if ($result1->num_rows > 0) {
												while($row1 = $result1->fetch_assoc()) {
													?>
													<span><?php echo $row1["name"]?></span>
													<?php
												}
											}
											?>
										</td>
										<td class="column5"><a href="updateCourse.php?updateCourse=<?php echo $row["idcourse"]?>"><button type="button" class="btn btn-default" >Update</button></a></td>
										<td class="column6">
											<a class="btn btn-default" href="modifyCourse.php?deletecourse=<?php echo $row["idcourse"]?>" onclick="return confirmDelete(this);">
												<i class="fa fa-trash-o fa-lg"></i> Delete</a>
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
		<script>
			function confirmDelete(link) {
				if (confirm("Are you sure?")) {
					doAjax(link.href, "POST"); 
				}
				return false;
			}
		</script>

	</body>
	</html>
