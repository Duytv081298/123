<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
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
