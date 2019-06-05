<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/styleadd.css">
<body>
<div class="content" style="padding: 50px 200px 50px 200px">
<form action="/action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Add Trainer</h1>
    <p>Please fill in this form to add Trainer.</p>
    <hr>

    <label for="Trainer"><b>First Name</b></label>
    <input type="text" placeholder="Enter Trainer's Catagory" name="Trainer" required>

    <label for="Trainer"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Trainer's Catagory" name="Trainer" required>

    <label for="Trainer"><b>Date of birth</b></label> 
    <input type="date" name="bday" required>

    </br></br>
    <label for="Trainer"><b>Email</b></label> 
    <input type="email" name="emailaddress" required> 
   </br></br>

    <label for="courseDetail"><b>Experience details</b></label>
    <input type="text" placeholder="Enter Trainer's Detail" name="trainerDetail" required>
    
    

    <div class="clearfix">
      <button type="submit" class="addTrainer">Add Trainer</button>
    </div>
  </div>
</form>
</div>

</body>
</html>
