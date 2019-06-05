<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/styleadd.css">
<body>
<div class="content" style="padding: 50px 200px 50px 200px">
<form action="/action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Add Topic</h1>
    <p>Please fill in this form to add Topic.</p>
    <hr>

    <label for="courseCatalogy"><b>Topic's Catagory</b></label>
    <input type="text" placeholder="Enter Topic's Catagory" name="courseCatalogy" required>

    <label for="courseName"><b>Topic's name</b></label> 
    <input type="text" placeholder="Enter Topic's name" name="topicName" required>

    <label for="courseDetail"><b>Topic's Detail </b></label>
    <input type="text" placeholder="Enter Topic's Detail" name="topicDetail" required>
    
    

    <div class="clearfix">
      <button type="submit" class="addCourse">Add Topic</button>
    </div>
  </div>
</form>
</div>

</body>
</html>
