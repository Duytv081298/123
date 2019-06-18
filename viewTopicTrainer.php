<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.css">

	<link rel="stylesheet" type="text/css" href="css/detail.css">
</head>
<body>
	
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
