
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "website");

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get text
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $idstaff = mysqli_real_escape_string($db, $_POST['idstaff']);

    $sql = "INSERT INTO  category (name, description, idstaff) VALUES ('$name', '$description', '$idstaff')";
    // execute query
    mysqli_query($db, $sql);
  }
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/styleadd.css">
<body>
  <div class="content" style="padding: 50px 200px 50px 200px">

<form action="addCategory.php" style="border:1px solid #ccc" method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1>Add Category</h1>
    <p>Please fill in this form to add Category.</p>
    <hr>


    <label for="name"><b>Category's name</b></label> 
    <input type="text" placeholder="Enter category's name" name="name" required>

    <label for="description"><b>Category's Description </b></label>
    <input type="text" placeholder="Enter category's Description" name="description" required>
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
                   <div class="clearfix">
      <button type="submit" name="upload">Add Category</button>
    </div>
  </div>
</form>
</div>

</body>
</html>
