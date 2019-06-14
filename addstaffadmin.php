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
        <h1>Add Staff</h1>
        <p>Please fill in this form to add Staff.</p>
        <hr>

        <label for="name"><b>Full Name: </b></label>
        <input type="text" placeholder="Enter Your Full Name" name="name" required></input>

        <label for="name"><b>User: </b></label> <br>
        <input type="text" placeholder="Enter staff's email" name="user" required></input>

        <br><br>

        <label for="pass"><b>Enter staff's password</b></label><br/>
        <input type="text" placeholder="Enter staff's password" name="pass" required></input>

        <br/><br/>

        <label for="idadmin"><b>ID Admin </b></label>
        <input type="text" name="idadmin" required value="<?=$idadmin;?>" disabled> </input>
        <br/>
        <br/>


        <div class="clearfix">
          <button type="submit" class="addCourse" name="uploadstaffadmin">Add Staff</button>
        </div>
      </div>
    </form>
  </div>

</body>
</html>