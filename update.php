<?php
session_start();
  $db = mysqli_connect("localhost", "root", "", "website");
// Staff Update Profile

  if (isset($_POST['updataStaff'])) {
    $idstaff = $_SESSION['idstaff'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $sql = "UPDATE `staff` SET `idstaff`='$idstaff',`user`='$user',`pass`='$pass',`name`='$name'  WHERE `idstaff`= $idstaff";
    mysqli_query($db, $sql);
    Header( "Location: TrainingStaff.php" );
}

// Staff Update Course

elseif(isset($_POST['updateCourse'])) {
    $idstaff = $_SESSION['idstaff'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $idcategory = $_POST['idcategory'];
    $idcourse = $_POST['id'];
    $sql = "UPDATE `course` SET `idcourse`='$idcourse',`name`='$name',`description`='$description', `idstaff`='$idstaff', `idcategory`= '$idcategory' WHERE `idcourse`= $idcourse";
    mysqli_query($db, $sql);
    Header( "Location: modifyCourse.php" );
}

// Staff Update topic
elseif(isset($_POST['updateTopic'])) {
    $idstaff = $_SESSION['idstaff'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $idtopic = $_POST['idtopic'];
    $idcourse = $_POST['idcourse'];
    $sql = "UPDATE `topic` SET `idtopic`='$idtopic',`name`='$name',`description`='$description', `idstaff`='$idstaff', `idcourse`= '$idcourse' WHERE `idtopic`= $idtopic";
    mysqli_query($db, $sql);
    Header( "Location: modifyTopic.php" );
}  

// Staff Update Category

elseif(isset($_POST['updateCategory'])) {
    $idstaff = $_SESSION['idstaff'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $idcategory = $_POST['idcategory'];
    $sql = "UPDATE `category` SET `idcategory`='$idcategory',`name`='$name',`description`='$description', `idstaff`='$idstaff'WHERE `idcategory`= $idcategory";
    mysqli_query($db, $sql);
    Header( "Location: modifyCategory.php" );
 }  


// Staff Update Trainee


 elseif(isset($_POST['updateTrainee'])) {
    $idstaff = $_SESSION['idstaff'];
    $idtrainee =  $_POST["idtrainee"];
    $name =  $_POST["name"];
    $age =  $_POST["age"];
    $mainlanguage =  $_POST["mainlanguage"];
    $experience =  $_POST["experience"];
    $idclass =  $_POST["idclass"];
    $sql = "UPDATE `trainee` SET `idtrainee`= '$idtrainee',`name`='$name',`age`= '$age',`mainlanguage`='$mainlanguage',`experience`='$experience',`idclass`='$idclass', `idstaff`='$idstaff' WHERE `idtrainee`= $idtrainee";
    mysqli_query($db, $sql);
    Header( "Location: modifyTrainee.php" );
    
}

// Staff Update Trainer

elseif(isset($_POST['updateTrainer'])) {
        $idstaff = $_SESSION['idstaff'];        
        $idtrainer =  $_POST["idtrainer"];
        $name =  $_POST["name"];
        $idclass =  $_POST["idclass"];
        $status =  $_POST["status"];
    $sql = "UPDATE `trainer` SET `idtrainer`= '$idtrainer',`name`='$name',`idclass`= '$idclass',`status`='$status',`idstaff`='$idstaff' WHERE `idtrainer`= $idtrainer";
    mysqli_query($db, $sql);
    Header( "Location: modifyTrainer.php" );
    
}

// Admin Update Trainer

elseif(isset($_POST['updateTrainerAdmin'])) {
    $idadmin = $_SESSION['idadmin'];
        $idtrainer = $_SESSION['idtrainer'];
        $user =  $_POST["user"];
        $pass =  $_POST["pass"];
        $name =  $_POST["name"];
        $status =  $_POST["status"];
    $sql = "UPDATE `trainer` SET `idtrainer`= '$idtrainer',`user`='$user',`pass`= '$pass',`name`='$name',`idadmin`='$idadmin',`status`='$status' WHERE `idtrainer`= $idtrainer";
    mysqli_query($db, $sql);
    Header( "Location: adminModifyTrainer.php" );
    
}

// Admin Update Staff

elseif (isset($_POST['updateStaffAdmin'])) {
    $idadmin = $_SESSION['idadmin'];
        $idstaff = $_SESSION['idstaff'];
        $user =  $_POST["user"];
        $pass =  $_POST["pass"];
        $name =  $_POST["name"];
    $sql = "UPDATE `staff` SET `idstaff`= '$idstaff',`user`='$user',`pass`= '$pass',`name`='$name',`idadmin`='$idadmin' WHERE `idstaff`= $idstaff";
    mysqli_query($db, $sql);
    Header( "Location: adminModifyStaff.php" );

// Admin Update Profile

}elseif (isset($_POST['updateAdminProfile'])) {
    $idadmin = $_SESSION['idadmin'];
        $user =  $_POST["user"];
        $pass =  $_POST["pass"];
        $name =  $_POST["name"];
    $sql = "UPDATE `admin` SET `idadmin`= '$idadmin',`user`='$user',`pass`= '$pass',`name`='$name'WHERE `idadmin`= $idadmin";
    mysqli_query($db, $sql);
    Header( "Location: admin.php" );
}elseif (isset($_POST['updateTrainerProfile'])) {
    $idtrainer = $_SESSION['idtrainer'];
        $user =  $_POST["user"];
        $pass =  $_POST["pass"];
        $name =  $_POST["name"];
    $sql = "UPDATE `trainer` SET `idtrainer`= '$idtrainer',`user`='$user',`pass`= '$pass',`name`='$name'WHERE `idtrainer`= $idtrainer";
    mysqli_query($db, $sql);
    Header( "Location: TrainerStaff.php" );
}
?>