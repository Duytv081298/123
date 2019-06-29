<?php
session_start();



//add Category


  $db = mysqli_connect("localhost", "root", "", "website");
  if (isset($_GET['uploadcategory'])) {
    $idstaff = $_SESSION['idstaff'];
    $name = mysqli_real_escape_string($db, $_GET['name']);
    $description = mysqli_real_escape_string($db, $_GET['description']);
    $sql = "INSERT INTO  category (name, description, idstaff) VALUES ('$name', '$description', '$idstaff')";
    mysqli_query($db, $sql);
}

// add Course 

elseif (isset($_POST['uploadcourse'])) {
  $idstaff = $_SESSION['idstaff'];
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $description = mysqli_real_escape_string($db, $_POST['description']);
  $idcategory = mysqli_real_escape_string($db, $_POST['idcategory']);
  $sql = "INSERT INTO  course (name, description, idstaff, idcategory) VALUES ('$name', '$description', '$idstaff', '$idcategory')";
    // execute query
  mysqli_query($db, $sql);
Header( "Location: modifyCourse.php" );
}

// add Topic


elseif (isset($_POST['uploadtopic'])) {
  $idstaff = $_SESSION['idstaff'];
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $description = mysqli_real_escape_string($db, $_POST['description']);
  $idcourse = mysqli_real_escape_string($db, $_POST['idcourse']);
  $sql = "INSERT INTO  topic (name, description, idstaff, idcourse) VALUES ('$name', '$description', '$idstaff', '$idcourse')";
  mysqli_query($db, $sql);
  Header( "Location: modifyTopic.php" );
}

// add Trainee 
elseif (isset($_POST['uploadtrainee'])) {
    $idstaff = $_SESSION['idstaff'];
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $age = mysqli_real_escape_string($db, $_POST['age']);
    $mainlanguage = mysqli_real_escape_string($db, $_POST['mainlanguage']);
    $experience = mysqli_real_escape_string($db, $_POST['experience']);
    $idclass = mysqli_real_escape_string($db, $_POST['idclass']);
    $sql = "INSERT INTO  Trainee (name, age, mainlanguage, experience,idstaff, idclass) VALUES ('$name', '$age', '$mainlanguage', '$experience', '$idstaff', '$idclass')";
    mysqli_query($db, $sql);
    Header( "Location: modifyTrainee.php" );
  }


// Staff add Trainer 
elseif (isset($_POST['uploadtrainer'])) {
  $idstaff = $_SESSION['idstaff'];
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $user = mysqli_real_escape_string($db, $_POST['user']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);
  $status = mysqli_real_escape_string($db, $_POST['status']);
  $idclass = mysqli_real_escape_string($db, $_POST['idclass']);
  $sql = "INSERT INTO  trainer (name, user, pass, status,idstaff, idclass) VALUES ('$name', '$user', '$pass', '$status', '$idstaff', '$idclass')";
  mysqli_query($db, $sql);
  Header( "Location: modifyTrainer.php" );
  }
// Admin add Trainer 
  else if (isset($_POST['uploadtraineradmin'])) {
  $idadmin = $_SESSION['idadmin'];
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $user = mysqli_real_escape_string($db, $_POST['user']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);
  $status = mysqli_real_escape_string($db, $_POST['status']);
  $sql = "INSERT INTO trainer(user, pass, name, idadmin,status) VALUES ( '$user', '$pass','$name', '$idadmin', '$status')";
  Header( "Location: adminModifyTrainer.php" );

  mysqli_query($db, $sql);
  }
// Admin add Staff 
  elseif (isset($_POST['uploadstaffadmin'])) {
  $idadmin = $_SESSION['idadmin'];
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $user = mysqli_real_escape_string($db, $_POST['user']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);
  $sql = "INSERT INTO  staff (name, user, pass,idadmin) VALUES ('$name', '$user', '$pass', '$idadmin')";
  mysqli_query($db, $sql);
  Header( "Location: adminModifyStaff.php" );
  }
?>