<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "website");

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get text
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $user = mysqli_real_escape_string($db, $_POST['user']);
    $pass = mysqli_real_escape_string($db, $_POST['pass']);
    $status = mysqli_real_escape_string($db, $_POST['status']);
    $idstaff = mysqli_real_escape_string($db, $_POST['idstaff']);
    $idclass = mysqli_real_escape_string($db, $_POST['idclass']);

    $sql = "INSERT INTO  trainer (name, user, pass, status,idstaff, idclass) VALUES ('$name', '$user', '$pass', '$status', '$idstaff', '$idclass')";
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
    <h1>Add Trainer</h1>
    <p>Please fill in this form to add Trainer.</p>
    <hr>

    <label for="name"><b>Full Name: </b></label>
    <input type="text" placeholder="Enter Your Full Name" name="name" required>

    <label for="user"><b>User</b></label> <br/>
    <input type="email" placeholder="Enter trainer's email" name="user" required>
    <br><br>

    <label for="pass"><b>Enter trainer's password</b></label><br/>
    <input type="password" placeholder="Enter trainer's password" name="pass" required>

        <br/><br/>

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
        <br/><br/>
<label for="status"><b>Enter Trainer's Status</b></label><br/>
  <input type="radio" name="status" value="male"> Internal<br>
  <input type="radio" name="status" value="female"> External<br>

    <div class="clearfix">
      <button type="submit" class="addCourse" name="upload">Add Trainer</button>
    </div>
  </div>
</form>
</div>

</body>
</html>
