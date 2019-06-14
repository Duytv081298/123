<?php
session_start();
$idadmin = $_SESSION['idadmin'];
?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/body.css">
</head>
<body>

        <div class="inner">
            <div class="contener">
                <h1>Your profile</h1>
                <button class="collapsible">Your profile</button>
                <div class="content-profile">
                    <form action="update.php" method="POST" class="formul">

                        <h2 class="title-section">Modify Information</h2>
                        <?php 
              require_once'db.php';
              $sql = "SELECT * FROM admin WHERE `idadmin`= $idadmin";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                  // output data of each row
                while($row = $result->fetch_assoc()) {
                  $name =  $row["name"];
                  $user =  $row["user"];
                  $pass =  $row["pass"];
                  ?>

                        <label class="float">ID admin :</label>
                        <input type="text" name="idadmin" required value="<?=$idadmin;?>" disabled style="text-align: center;"> </input><br>

                        <label class="float">User :</label>
                        <input type="text" name="user" required value="<?=$user;?>"> </input><br>

                        <label class="float">Password :</label>
                        <input type="Password" name="pass" required value="<?=$pass;?>"> </input><br>

                        <label class="float">Name :</label>
                        <input type="text" name="name" required value="<?=$name;?>"> </input> <br>
                        
                        <hr />
                        <div class="center"><input type="submit" name="updateAdminProfile" value="Modify my profile" /></div><br />
                        <?php
                }
              }
              ?>
                    </form>
                </div>

            </div>
        </div>

        <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight){
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
        </script>
</body>
</html>