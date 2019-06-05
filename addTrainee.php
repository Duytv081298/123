<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "website");

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get text
    $categoryname = mysqli_real_escape_string($db, $_POST['categoryname']);
    $description = mysqli_real_escape_string($db, $_POST['description']);

    $sql = "INSERT INTO  categorycourse (categoryname, description) VALUES ('$categoryname', '$description')";
    // execute query
    mysqli_query($db, $sql);
  }

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/styleadd.css">
<body>
<div class="content" style="padding: 50px 200px 50px 200px">
<form action="/action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Add Trainee</h1>
    <p>Please fill in this form to add Trainee.</p>
    <hr>

    <label for="courseCatalogy"><b>First Name</b></label>
    <input type="text" placeholder="Enter Trainee's Catagory" name="courseCatalogy" required>

    <label for="courseCatalogy"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Trainee's Catagory" name="courseCatalogy" required>

    <label for="courseName"><b>Date of birth</b></label> 
    <input type="date" name="bday" required>

    </br></br><label for="courseName"><b>Education</b></label> 
    <input type="text" placeholder="Enter Trainee's name" name="courseName" required>
    <label for="courseName"><b>Main Programming Language</b></label> 
    <input type="text" placeholder="Enter main programming language" name="mainLanguage" required>

    <label for="courseDetail"><b>Experience details</b></label>
    <input type="text" placeholder="Enter Trainee's Detail" name="courseDetail" required>
    
    

    <div class="clearfix">
      <button type="submit" class="addCourse">Add Trainee</button>
    </div>
  </div>
</form>
</div>

</body>
</html>
