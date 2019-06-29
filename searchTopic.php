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
	if(isset($_GET['deletetopic']))
	{
		require_once'db.php';
		$idtopic = $_GET['deletetopic'];
		$sql ="DELETE FROM topic WHERE idtopic ='". (int)$idtopic ."'";
		$result = $conn-> query($sql);
		Header( "Location: modifyTopic.php" );
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
										<form class="example" action="searchTopic.php" method="get">
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
								<th class="column1">ID Topic</th>
								<th class="column2">Topic's Name</th>
								<th class="column3">Topic's Description</th>
								<th class="column4">Course's Name</th>
								<th class="column5">Update</th>
								<th class="column6">Delete</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							require_once'db.php';
							$sql = "SELECT * FROM `topic` WHERE name LIKE  '%".$_GET['search']."%'";
							$result = $conn-> query($sql);
							$row = $result->fetch_assoc();
							$idtopic =  $row["idtopic"];

							$sql1 = "SELECT idtopic, topic.`name` as TopicName, topic.`description`, topic.`idcourse`, course.`name` as CourseName from topic INNER JOIN course ON topic.idcourse=course.idcourse WHERE idtopic = ".$idtopic;
							$result1 = $conn->query($sql1);
							if ($result1->num_rows > 0) {
								while($row1 = $result1->fetch_assoc()) {
									?>
									<tr>
										<td class="column1"><?php echo $row1["idtopic"]?></td>
										<td class="column2"><?php echo $row1["TopicName"]?></td>
										<td class="column3"><?php echo $row1["description"]?></td>
										<td class="column4"><?php echo $row1["CourseName"]?>
										<td class="column5"><a href="updateTopic.php?updateTopic=<?php echo $row["idtopic"]?>"><button type="button" class="btn btn-default" >Update</button></a></td>
										<td class="column6">
											<a class="btn btn-default" href="modifyTopic.php?deletetopic=<?php echo $row["idtopic"]?>"> 
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
</body>
</html>
