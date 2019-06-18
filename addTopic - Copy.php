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
    <h1>Add Topic</h1>
    <p>Please fill in this form to add Topic.</p>
    <hr>

    <label for="name"><b>Topic's name</b></label> 
    <input type="text" placeholder="Enter Topic's name" name="name" required>

    <label for="description"><b>Topic's Description</b></label>
    <input type="text" placeholder="Enter Topic's Description" name="description" required>

    <label for="idstaff"><b>ID Staff </b></label>
    <input type="text" name="idstaff" required value="<?=$idstaff;?>" disabled> </input>

    <label for="idcourse"><b>ID Course </b></label>
    
        <input list="idcourse" name="idcourse">
        <datalist id="idcourse">
        <?php 
        require_once'db.php';

        $sql = "SELECT * FROM course ";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
                  // output data of each row
          while($row = $result->fetch_assoc()) {
            ?>
            <option><?php echo $row["idcourse"]?>-<?php echo $row["name"]?></option>
            <?php
          }
        }
        ?>
        </datalist>
    <div class="clearfix">
      <button type="submit" class="addTopic" name="uploadtopic">Add Topic</button>
    </div>
  </div>
</form>
</div>

</body>
</html>
