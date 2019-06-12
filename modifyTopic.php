<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<?php 
	if(isset($_GET['deletecourse']))
	{
		require_once'db.php';
		$idtopic = $_GET['deletecourse'];
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
							$sql = "SELECT idtopic, topic.`name` as TopicName, topic.`description`, topic.`idcourse`, course.`name` as CourseName from topic INNER JOIN course ON topic.idcourse=course.idcourse ";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									?>
									<tr>
										<td class="column1"><?php echo $row["idtopic"]?></td>
										<td class="column2"><?php echo $row["TopicName"]?></td>
										<td class="column3"><?php echo $row["description"]?></td>
										<td class="column4"><?php echo $row["CourseName"]?>
										<td class="column5"><a href="https://youtu.be/2WRN7_jj9bI"><button type="button" class="btn btn-default" >Update</button></a></td>
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
