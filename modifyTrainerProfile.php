<?php
session_start();
$idtrainer = $_SESSION['idtrainer'];

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

                <?php 
                    require_once'db.php';
                    $sql = "SELECT * FROM trainer WHERE `idtrainer`= $idtrainer";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                  // output data of each row
                      while($row = $result->fetch_assoc()) {
                        $user =  $row["user"];
                        $pass =  $row["pass"];
                        $name =  $row["name"];
                        ?>
                <button class="collapsible">Your profile</button>
                <div class="content-profile">
                    <form action="update.php" method="POST" class="formul">

                        <h2 class="title-section">Modify Information</h2>

                        <label class="float">ID Trainer :</label>
                        <input type="text" name="idtrainer" required value="<?=$idtrainer;?>" disabled style="text-align: center;"> </input><br>

                        <label class="float">User :</label>
                        <input type="text" name="user" required value="<?=$user;?>"> </input><br>

                        <label class="float">Password :</label>
                        <input type="Password" name="pass" required value="<?=$pass;?>"> </input><br>

                        <label class="float">Name :</label>
                        <input type="text" name="name" required value="<?=$name;?>"> </input> <br>
                        
                        <hr />
                        <div class="center"><input type="submit" name="updateTrainerProfile" value="Modify my profile" /></div><br />
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