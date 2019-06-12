<?php
session_start();
$idstaff = $_SESSION['idstaff'];
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/styleadd.css">

<body>
	<div class="content" style="padding: 50px 200px 50px 200px">

<form action="add.php" style="border:1px solid #ccc" method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1>Add Course</h1>
    <p>Please fill in this form to add course.</p>
    <hr>


    <label for="name"><b>Course's name</b></label> 
    <input type="text" placeholder="Enter Course's name" name="name" required>

    <label for="description"><b>Course's Detail </b></label>
    <input type="text" placeholder="Enter Course's Description" name="description" required>

    <label for="idstaff"><b>ID Staff </b></label>
	<input type="text" name="idstaff" required value="<?=$idstaff;?>" disabled> </input>

    <label for="idcategory"><b>Course's Category</b></label>
    <input list="idcategory" name="idcategory">
        <datalist id="idcategory">
        <?php 
        require_once'db.php';

        $sql = "SELECT * FROM category ";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
                  // output data of each row
          while($row = $result->fetch_assoc()) {
            ?>
            <option><?php echo $row["idcategory"]?>-<?php echo $row["name"]?></option>
            <?php
          }
        }
        ?>
        </datalist>

    <div class="clearfix">
      <button type="submit" class="addCourse" name="uploadcourse">Add Course</button>
    </div>
  </div>
</form>
</div>

</body>
</html>
