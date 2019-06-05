<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/styleadd.css">
<body>
	<div class="content" style="padding: 50px 200px 50px 200px">

<form action="addCourse.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Add Course</h1>
    <p>Please fill in this form to add course.</p>
    <hr>


    <label for="name"><b>Course's name</b></label> 
    <input type="text" placeholder="Enter Course's name" name="name" required>

    <label for="idcategory"><b>Course's Category</b></label>
    <input type="text" placeholder="Enter Course's Catagory" name="idcategory" required>


    <label for="description"><b>Course's Detail </b></label>
    <input type="text" placeholder="Enter Course's Description" name="description" required>
    
    

    <div class="clearfix">
      <button type="submit" class="addCourse">Add Course</button>
    </div>
  </div>
</form>
</div>

</body>
</html>
