<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

require_once'db1.php';

$idcourse = $_GET["idcourse"];
$sql = "SELECT * FROM course where idcourse ='".$idcourse . "'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	?>
	


			<div class="oneproduct">
				<a class="hinhproduct" href="modifyCourseDetail.php?idcourse=<?php echo $row["idcourse"]?>">
					
				    	<p>Name <?php echo $row["name"]?> % </p>
				    	<p>ONLY 
				    		<?php echo $row["topics"]?>
				    	</p>

				</a>
				
			</div>

<?php
	}
}
?>

</body>
</html>