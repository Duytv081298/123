<?php
session_start();
$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<title>Manage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {background-color: #f1f1f1}
.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <a href="Logout.php" style="text-decoration: none"><span class="w3-bar-item w3-right hvr-trim button" style="background: black; color: white">Log out</span></a>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar ">
      <span class="hvr-grow button">Welcome, <strong><?php echo $name;  ?></strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="ModifyStaffProfile.php" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>

    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>

<div class="dropdown">
    <a href="#" class="w3-bar-item w3-button w3-padding"><i  class="fa icons">&#xf02d;</i> Manage Course  <i class="fa customer-right-icons">&#xf0d7;</i></a>

    <div class="dropdown-content">
        <a class="target  sub-nav-customer " href="addCourse.php" ><i  class="fa icons">&#xf067;</i>Add Course</a>
        <a class=" sub-nav-customer" href="modifyCourse.php" onclick="SideBar(event, 'manage-customer-id')"><i class="fa icons">&#xf0ce;</i>Modify Course</a>
      </div>
  </div>

<div class="dropdown">
  <a href="#" class="w3-bar-item w3-button w3-padding"><i  class="fa icons">&#xf2b9;</i> Manage Topics  <i class="fa customer-right-icons">&#xf0d7;</i></a>

    <div class="dropdown-content">
        <a class="target  sub-nav-customer " href="addTopic.php" ><i  class="fa icons">&#xf067;</i>Add Topic</a>
        <a class=" sub-nav-customer" href="modifyTopic.php" onclick="SideBar(event, 'manage-customer-id')"><i class="fa icons">&#xf0ce;</i>Modify Topic</a>
      </div>
</div>


<div class="dropdown">
  <a href="#" class="w3-bar-item w3-button w3-padding"><i  class="fa icons">&#xf03b;</i> Manage Course Categories  <i class="fa customer-right-icons">&#xf0d7;</i></a>

    <div class="dropdown-content">
        <a class="target  sub-nav-customer " href="addCategory.php" ><i  class="fa icons">&#xf067;</i>Add Category</a>
        <a class=" sub-nav-customer" href="modifyCategory.php" onclick="SideBar(event, 'manage-customer-id')"><i class="fa icons">&#xf0ce;</i>Modify Category</a>
      </div>
</div>

<div class="dropdown">
  <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Manage Trainee  <i class="fa customer-right-icons">&#xf0d7;</i></a>

    <div class="dropdown-content">
        <a class="target  sub-nav-customer " href="addTrainee.php" ><i  class="fa icons">&#xf067;</i>Add Trainee</a>
        <a class=" sub-nav-customer" href="modifyTrainee.php" onclick="SideBar(event, 'manage-customer-id')"><i class="fa icons">&#xf0ce;</i>Modify Trainee</a>
      </div>
</div>

<div class="dropdown">
  <a href="#" class="w3-bar-item w3-button w3-padding"><i  class="fa icons">&#xf007;</i>  Manage Trainer's profile  <i class="fa customer-right-icons">&#xf0d7;</i></a>

    <div class="dropdown-content">
      <a class="target  sub-nav-customer " href="addTrainer.php" ><i  class="fa icons">&#xf067;</i>Add Trainer</a>
        <a class=" sub-nav-customer" href="modifyTrainer.php" onclick="SideBar(event, 'manage-customer-id')"><i class="fa icons">&#xf0ce;</i>Modify Trainer's profile</a>
      </div>
</div>

    <br><br>
  
</div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container hvr-bounce-in button" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
   
    <div class="w3-quarter hvr-wobble-vertical">      
      <div class="w3-container w3-red w3-padding-16">

        <div class="w3-left"><i class="fa fa-book w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php 
              require_once'db.php';
              $sql4 = "select idcourse from course";
              $result4 = $conn-> query($sql4);
              $row4 = mysqli_num_rows($result4);
              echo $row4;
              ?>
                
          </h3>
        </div>

        <div class="w3-clear" ></div>
        <h4>Courses</h4>
    </div>
  </div>



    <div class="w3-quarter hvr-wobble-vertical">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-address-book-o w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php 
              require_once'db.php';
              $sql4 = "select idtopic from topic";
              $result4 = $conn-> query($sql4);
              $row4 = mysqli_num_rows($result4);
              echo $row4;
              ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Topics</h4>
      </div>
    </div>
    <div class="w3-quarter hvr-wobble-vertical">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-user w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php 
              require_once'db.php';
              $sql4 = "select idtrainer from trainer";
              $result4 = $conn-> query($sql4);
              $row4 = mysqli_num_rows($result4);
              echo $row4;
              ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Trainers</h4>
      </div>
    </div>
    <div class="w3-quarter hvr-wobble-vertical">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php 
              require_once'db.php';
              $sql4 = "select idtrainee from trainee";
              $result4 = $conn-> query($sql4);
              $row4 = mysqli_num_rows($result4);
              echo $row4;
              ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Trainees</h4>
      </div>
    </div>
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        <h5>Regions</h5>
        <img src="images/region.jpg" style="width:100%" alt="Google Regional Map">
      </div>
      <div class="w3-twothird">
        <h5>Feeds</h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
            <td>New record, over 90 views.</td>
            <td><i>10 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bell w3-text-red w3-large"></i></td>
            <td>Database error.</td>
            <td><i>15 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
            <td>New record, over 40 users.</td>
            <td><i>17 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-comment w3-text-red w3-large"></i></td>
            <td>New comments.</td>
            <td><i>25 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
            <td>Check transactions.</td>
            <td><i>28 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-laptop w3-text-red w3-large"></i></td>
            <td>CPU overload.</td>
            <td><i>35 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-share-alt w3-text-green w3-large"></i></td>
            <td>New shares.</td>
            <td><i>39 mins</i></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <hr>
  
  </div>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");
// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");
// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}
// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>