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
        <h1>Add Trainer</h1>
        <p>Please fill in this form to add Trainer.</p>
        <hr>

        <label for="name"><b>Full Name: </b></label>
        <input type="text" placeholder="Enter Your Full Name" name="name" required></input>

        <label for="name"><b>User: </b></label> <br>
        <input type="text" placeholder="Enter trainer's email" name="user" required></input>

        
        <br><br>

        <label for="pass"><b>Enter trainer's password</b></label><br/>
        <input type="text" placeholder="Enter trainer's password" name="pass" required></input>

        <br/><br/>

        <label for="idstaff"><b>ID Staff </b></label>
        <input type="text" name="idstaff" required value="<?=$idstaff;?>" disabled> </input>
        <br/>
        <br/>


        <label for="idclass"><b>ID Class </b></label>

        <input list="idclass" name="idclass" type="text">
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
          <button type="submit" class="addCourse" name="uploadtrainer">Add Trainer</button>
        </div>
      </div>
    </form>
  </div>

</body>
</html>
