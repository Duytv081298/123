<?php
session_start();
$idstaff = $_SESSION['idstaff'];
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
                    $sql = "SELECT * FROM staff WHERE `idstaff`= $idstaff";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                  // output data of each row
                      while($row = $result->fetch_assoc()) {
                        $user =  $row["user"];
                        $pass =  $row["pass"];
                        $name =  $row["name"];
                        ?>

                        <label class="float">ID Staff :</label>
                        <input type="text" name="idstaff" required value="<?=$idstaff;?>" disabled style="text-align: center;"> </input><br>

                        <label class="float">User :</label>
                        <input type="text" name="user" required value="<?=$user;?>"> </input><br>

                        <label class="float">Password :</label>
                        <input type="text" name="pass" required value="<?=$pass;?>"> </input><br>

                        <label class="float">Name :</label>
                        <input type="text" name="name" required value="<?=$name;?>"> </input> <br>
                        <?php
                    }
                }
                ?>
                <hr />
                <div class="center"><input type="submit" name="updataStaff" value="Modify my profile" /></div><br />
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