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
	if(isset($_GET['deletetrainee']))
	{
		require_once'db.php';
		$idtrainee = $_GET['deletetrainee'];
		$sql ="DELETE FROM trainee WHERE idtrainee ='". (int)$idtrainee ."'";
		$result = $conn-> query($sql);
		Header( "Location: modifyTrainee.php" );
	}
	?> 
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">ID Trainee</th>
								<th class="column2">Name</th>
								<th class="column2">Class Name</th>
								<th class="column3">Topic's Name</th>
								<th class="column4">Course's Name</th>
								<th class="column5">Trainer's Name</th>
								<th class="column5">Update</th>
								<th class="column6">Delete</th>
								
							</tr>
						</thead>
						<tbody>
							<?php 
							require_once'db.php';
							$sql = "SELECT * FROM trainee";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									$idtrainee =  $row["idtrainee"];
									?>
									<tr>
										<td class="column1"><?php echo $row["idtrainee"]?></td>
										<td class="column2"><?php echo $row["name"]?></td>


										<td class="column2">
											<?php 
											require_once'db.php';

											$sql1 = "SELECT  idtrainee,trainee.`name` as Name, class.`name` as Class FROM trainee INNER JOIN class ON class.idclass=class.idclass WHERE trainee.idtrainee =".$idtrainee;
											$result1 = $conn->query($sql1);
											if ($result1->num_rows > 0) {
												while($row1 = $result1->fetch_assoc()) {
													?>
													<span><?php echo $row1["Class"]?>.  </span>
													<?php
												}
											}
											?>
										</td>

										<td class="column2">
											<?php 
											require_once'db.php';

											$sql2 = "SELECT DISTINCT idtrainee,trainee.`name` as Name, class.`name` as Class,topic.`name` as Topic FROM trainee INNER JOIN class ON class.idclass=class.idclass INNER JOIN topic ON topic.idtopic=class.idtopic  WHERE idtrainee =".$idtrainee;
											$result2 = $conn->query($sql2);
											if ($result2->num_rows > 0) {
												while($row2 = $result2->fetch_assoc()) {
													?>
													<span><?php echo $row2["Topic"]?>.  </span>
													<?php
												}
											}
											?>
										</td>


										<td class="column2">
											<?php 
											require_once'db.php';
											$sql3 = "SELECT DISTINCT idtrainee,trainee.`name` as Name, class.`name` as Class,course.`name` as Course FROM trainee INNER JOIN class ON class.idclass=class.idclass INNER JOIN course ON course.idcourse=class.idcourse WHERE idtrainee = ".$idtrainee;
											$result3 = $conn->query($sql3);
											if ($result3->num_rows > 0) {
												while($row3 = $result3->fetch_assoc()) {
													?>
													<span><?php echo $row3["Course"]?>.  </span>
													<?php
												}
											}
											?>
										</td>
										<td class="column2">
											<?php 
											require_once'db.php';
											$sql4 = "SELECT DISTINCT idtrainee,trainee.`name` as Name, trainer.`name` as Trainer FROM trainee INNER JOIN class ON class.idclass=class.idclass INNER JOIN trainer ON class.idclass=class.idclass WHERE idtrainee =".$idtrainee;
											$result4 = $conn->query($sql4);
											if ($result4->num_rows > 0) {
												while($row4 = $result4->fetch_assoc()) {
													?>
													<span><?php echo $row4["Trainer"]?>.  </span>
													<?php
												}
											}
											?>
										</td>
										<td class="column5"><button>Update</button></td>
										<td class="column6">
											<a class="btn btn-default" href="modifyTrainee.php?deletetrainee=<?php echo $row["idtrainee"]?>"> 
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
