<?php
session_start();
$idadmin = $_SESSION['idadmin'];
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

        <label for="idadmin"><b>ID Admin </b></label>
        <input type="text" name="idadmin" required value="<?=$idadmin;?>" readonly="true"></input>

        <br/><br/>
        <label for="status"><b>Enter Trainer's Status</b></label><br/>
        <input type="radio" name="status" value="1"> Internal<br>
        <input type="radio" name="status" value="0"> External<br>

        <div class="clearfix">
          <button type="submit" class="addTrainerAdmin" name="uploadtraineradmin">Add Trainer</button>
        </div>
      </div>
    </form>
  </div>

</body>
</html>