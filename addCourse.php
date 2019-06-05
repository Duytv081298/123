
<?php
  // Create database connection
$db = mysqli_connect("localhost", "root", "", "website");

  // If upload button is clicked ...
if (isset($_POST['upload'])) {
    // Get text
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $description = mysqli_real_escape_string($db, $_POST['description']);
  $idstaff = mysqli_real_escape_string($db, $_POST['idstaff']);
  $idcategory = mysqli_real_escape_string($db, $_POST['idcategory']);

  $sql = "INSERT INTO  course (name, description, idstaff, idcategory) VALUES ('$name', '$description', '$idstaff', '$idcategory')";
    // execute query
  mysqli_query($db, $sql);

}

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/styleadd.css">

<body>
	<div class="content" style="padding: 50px 200px 50px 200px">

<form action="addCourse.php" style="border:1px solid #ccc" method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1>Add Course</h1>
    <p>Please fill in this form to add course.</p>
    <hr>


    <label for="name"><b>Course's name</b></label> 
    <input type="text" placeholder="Enter Course's name" name="name" required>

    <label for="description"><b>Course's Detail </b></label>
    <input type="text" placeholder="Enter Course's Description" name="description" required>

    <label for="idstaff"><b>ID Staff </b></label>
    <input type="text" placeholder="Enter id staff" name="idstaff" required>
    
    <label for="idcategory"><b>Course's Category</b></label>
    <input type="text" placeholder="Enter Course's Catagory" name="idcategory" required>

    <div class="clearfix">
      <button type="submit" class="addCourse" name="upload">Add Course</button>
    </div>
  </div>
</form>
</div>

</body>
</html>
