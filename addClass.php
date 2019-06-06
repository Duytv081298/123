
<?php
session_start();
$idstaff = $_SESSION['idstaff'];
?>
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
        <p>Please fill in this form to add New Class.</p>
        <hr>

        <label for="name"><b>Class Name: </b></label>
        <input type="text" placeholder="Enter Your Full Name" name="name" required>

        <br/><br/>

        <label for="idstaff"><b>ID Staff </b></label>
        <input type="text" name="idstaff" required value="<?=$idstaff;?>" disabled> </input>
        <br/>
        <br/>


        <?php 
        require_once'db.php';
        $sql = "SELECT * FROM category ";
        $result = $conn->query($sql);
        $row=$result->fetch_assoc();
        $idcategory = $row['idcategory'];
        if($row=$result->fetch_assoc()){
          ?> 
          <label for="idcategory"><b>ID category </b></label>
          <input list="idcategory" name="idcategory">
          <datalist id="idcategory">
            <?php 
            while($row=$result->fetch_assoc()) {
              ?>
              <option><?php echo $row["idcategory"]?>-<?php echo $row["name"]?></option>
              <?php
            }
            ?>
          </datalist>

          <label for="idcourse"><b>ID Course </b></label>
          <input list="idcourse" name="idcourse">
          <datalist id="idcourse">

            <?php 
            $sql1 = "SELECT * FROM course where idcategory = ".$idcategory;
            $result1 = $conn->query($sql1);
            if($row1 = $result1->fetch_assoc()){
              $idcourse = $row1['idcourse'];
              while($row1 = $result->fetch_assoc()) {
                ?>
                <option><?php echo $row1["idcourse"]?>-<?php echo $row1["name"]?></option>
                <?php
              }
            }
            ?>
          </datalist>
          <?php
        }
        ?>
        <br/><br/>

        <div class="clearfix">
          <button type="submit" class="addClass" name="upload">Add Class</button>
        </div>
      </div>
    </form>
  </div>

</body>
</html>
