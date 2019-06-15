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
    <h1>Add Trainee</h1>
    <p>Please fill in this form to add Trainee.</p>
    <hr>

    <label for="name"><b>Your Full Name: </b></label>
    <input type="text" placeholder="Enter Your Full Name" name="name" required>


    <label for="age"><b>Date of birth</b></label> 
    <input type="text" placeholder="Enter age" name="age" required>

    </br></br>
    <label for="mainlanguage"><b>Main Programming Language</b></label> 
    <input type="text" placeholder="Enter main programming language" name="mainlanguage" required>

    <label for="experience"><b>Experience details</b></label>
    <input type="text" placeholder="Enter Your Experience" name="experience" required>
    <br/>
    <br/>
    <label for="idstaff"><b>ID Staff </b></label>
    <input type="text" name="idstaff" required value="<?=$idstaff;?>" disabled> </input>

        <br/>
        <br/>


       <label for="idclass"><b>ID Class </b></label>
    
        <input list="idclass" name="idclass">
        <datalist id="idclass">
        <?php 
        require_once'db.php';

        $sql = "SELECT * FROM class ";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
                  // output data of each row
          while($row = $result->fetch_assoc()) {
            ?>
            <option><?php echo $row["idclass"]?>-<?php echo $row["name"]?></option>
            <?php
          }
        }
        ?>
        </datalist>
    
    <div class="clearfix">
      <button type="submit" class="addCourse" name="uploadtrainee">Add Trainee</button>
    </div>
  </div>
</form>
</div>

</body>
</html>
