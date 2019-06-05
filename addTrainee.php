<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "website");

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get text
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $dayofbirth = mysqli_real_escape_string($db, $_POST['dayofbirth']);
    $mainlanguage = mysqli_real_escape_string($db, $_POST['mainlanguage']);
    $experience = mysqli_real_escape_string($db, $_POST['experience']);
    $idstaff = mysqli_real_escape_string($db, $_POST['idstaff']);
    $idclass = mysqli_real_escape_string($db, $_POST['idclass']);

    $sql = "INSERT INTO  Trainee (name, dateofbirth, mainlanguage, experience,idstaff, idclass) VALUES ('$name', '$dayofbirth', '$mainlanguage', '$experience', '$idstaff', '$idclass')";
    // execute query
    mysqli_query($db, $sql);
  }

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/styleadd.css">
<body>
<div class="content" style="padding: 50px 200px 50px 200px">
<form action="#" style="border:1px solid #ccc" method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1>Add Trainee</h1>
    <p>Please fill in this form to add Trainee.</p>
    <hr>

    <label for="name"><b>Your Full Name: </b></label>
    <input type="text" placeholder="Enter Your Full Name" name="name" required>


    <label for="dayofbirth"><b>Date of birth</b></label> 
    <input type="date" name="dayofbirth" required>

    </br></br>
    <label for="mainlanguage"><b>Main Programming Language</b></label> 
    <input type="text" placeholder="Enter main programming language" name="mainlanguage" required>

    <label for="experience"><b>Experience details</b></label>
    <textarea type="text" placeholder="Enter Your Experience" name="experience" required></textarea>
    <br/>
    <br/>
     <label for="idstaff"><b>ID Staff </b></label>
    
        <input list="idstaff" name="idstaff">
        <datalist id="idstaff">
        <?php 
        require_once'db.php';

        $sql = "SELECT * FROM staff ";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
                  // output data of each row
          while($row = $result->fetch_assoc()) {
            ?>
            <option><?php echo $row["idstaff"]?>-<?php echo $row["name"]?></option>
            <?php
          }
        }
        ?>
        </datalist>
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
      <button type="submit" class="addCourse" name="upload">Add Trainee</button>
    </div>
  </div>
</form>
</div>

</body>
</html>
