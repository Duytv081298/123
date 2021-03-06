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
			Header( "Location: modifyTrainer.php" );
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
									<th colspan="3" >
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
									<th colspan="8">
									</th>
								</tr>
								<tr class="table100-head">
									<th class="column1">ID Trainer</th>
									<th class="column2">Name</th>
									<th class="column2">Class Name</th>
									<th class="column3">Topic's Name</th>
									<th class="column4">Course's Name</th>
									<th class="column5">Type of Work</th>
									<th class="column5">Update</th>
									<th class="column6">Delete</th>
									
								</tr>
							</thead>
							<tbody>
								<?php 
								require_once'db.php';
								$sql = "SELECT * FROM trainer";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
										$idtrainer =  $row["idtrainer"];
										?>
										<tr>
											<td class="column1"><?php echo $row["idtrainer"]?></td>
											<td class="column2"><?php echo $row["name"]?></td>


											<td class="column2">
												<?php 
												require_once'db.php';

												$sql1 = "SELECT  idtrainer,trainer.`name` as Name, class.`name` as Class FROM trainer INNER JOIN class ON trainer.idclass=class.idclass WHERE trainer.idtrainer =".$idtrainer;
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

												$sql2 = "SELECT DISTINCT idtrainer,trainer.`name` as Name, class.`name` as Class,topic.`name` as Topic FROM trainer INNER JOIN class ON class.idclass=class.idclass INNER JOIN topic ON topic.idtopic=class.idtopic  WHERE idtrainer =".$idtrainer;
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
												$sql3 = "SELECT DISTINCT idtrainer,trainer.`name` as Name, class.`name` as Class,course.`name` as Course FROM trainer INNER JOIN class ON class.idclass=class.idclass INNER JOIN course ON course.idcourse=class.idcourse WHERE idtrainer = ".$idtrainer;
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
											<td class="column2"><?php echo $row["status"]?>*</td>
											<td class="column5"><a href="updateTrainer.php?updateTrainer=<?php echo $row["idtrainer"]?>"><button type="button" class="btn btn-default" >Update</button></a></td>
											<td class="column6">
												<a class="btn btn-default" href="modifyTrainer.php?deletetrainer=<?php echo $row["idtrainer"]?>"onclick="return confirmDelete(this);"> 
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
					if (confirm("Are you sure?")) {
						doAjax(link.href, "POST"); 
					}
					return false;
				}
			</script>

		</body>
		</html>
