<?php
session_start();
$idstaff = $_SESSION['idstaff'];
?>

<!-- add Category -->

<?php
  $db = mysqli_connect("localhost", "root", "", "website");
  if (isset($_POST['uploadcategory'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $sql = "INSERT INTO  category (name, description, idstaff) VALUES ('$name', '$description', '$idstaff')";
    mysqli_query($db, $sql);
    Header( "Location: modifyCategory.php" );
}

// add Course 

elseif (isset($_POST['uploadcourse'])) {
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
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $description = mysqli_real_escape_string($db, $_POST['description']);
  $idcourse = mysqli_real_escape_string($db, $_POST['idcourse']);
  $sql = "INSERT INTO  topic (name, description, idstaff, idcourse) VALUES ('$name', '$description', '$idstaff', '$idcourse')";
  mysqli_query($db, $sql);
  Header( "Location: modifyTopic.php" );
}

// add Trainee 
elseif (isset($_POST['uploadtrainee'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $dayofbirth = mysqli_real_escape_string($db, $_POST['dayofbirth']);
    $mainlanguage = mysqli_real_escape_string($db, $_POST['mainlanguage']);
    $experience = mysqli_real_escape_string($db, $_POST['experience']);
    $idclass = mysqli_real_escape_string($db, $_POST['idclass']);
    $sql = "INSERT INTO  Trainee (name, dateofbirth, mainlanguage, experience,idstaff, idclass) VALUES ('$name', '$dayofbirth', '$mainlanguage', '$experience', '$idstaff', '$idclass')";
    mysqli_query($db, $sql);
    Header( "Location: modifyTrainee.php" );
  }


// add Trainer 
elseif (isset($_POST['uploadtrainer'])) {
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $user = mysqli_real_escape_string($db, $_POST['user']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);
  $status = mysqli_real_escape_string($db, $_POST['status']);
  $idclass = mysqli_real_escape_string($db, $_POST['idclass']);
  $sql = "INSERT INTO  trainer (name, user, pass, status,idstaff, idclass) VALUES ('$name', '$user', '$pass', '$status', '$idstaff', '$idclass')";
  mysqli_query($db, $sql);
  Header( "Location: modifyTrainer.php" );
  }
?>