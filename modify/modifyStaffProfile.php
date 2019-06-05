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
                    <form method="post" class="formul">
                        <h2 class="title-section">Informations person</h2>

                        <label for="lastname" class="float">Modify your last name :</label>
                        <input type="text" placeholder="lastname" name="lastname" id="lastname" value="<?php if (isset($lastname)) { echo $lastname; } else { echo $ini_lastname; } ?>" /><br />
                        <?php if (isset($erreur_lastname)) { echo '<span class="form-error">' . $erreur_lastname . '</span><br /><br />'; } ?>

                        <label for="name" class="float">Modify your name :</label>
                        <input type="text" placeholder="name" name="name" id="name" value="<?php if (isset($name)) { echo $name; } else { echo $ini_name; } ?>" /><br />
                        <?php if (isset($erreur_name)) { echo '<span class="form-error">' . $erreur_name . '</span><br /><br />'; } ?>

                        <label for="date_naissance" class="float">Modify your date of birth :</label>
                        <input type="date" name="date_naissance" id="date_naissance" value="<?php if (isset($date_naissance)) { echo $date_naissance; } else { echo $ini_naissance; } ?>" /><br />
                        <?php if (isset($erreur_date_naissance)) { echo '<span class="form-error">' . $erreur_date_naissance . '</span><br />'; } ?><br />

                        <h2 class="title-section">Authentication Information</h2>

                        <label for="mail" class="float">Modify your e-mail address:</label>
                        <input type="text" placeholder="E-mail" name="mail" id="mail" value="<?php if (isset($mail)) { echo $mail; } else { echo $ini_mail; } ?>" /><br />
                        <?php if (isset($erreur_mail)) { echo '<span class="form-error">' . $erreur_mail . '</span><br /><br />'; } ?>

                        <label for="mdp" class="float">Modify your password :</label>
                        <input type="password" placeholder="password" name="pass" id="pass" value="<?php if (isset($pass)) { echo $pass; } ?>" /><br />
                        <?php if (isset($erreur_pass)) { echo '<span class="form-error">' . $erreur_pass . '</span><br /><br />'; } ?>

                        <label for="pass_verif" class="float">Verification your password :</label>
                        <input type="password" placeholder="Confirm your password" name="pass_verif" id="pass_verif" value="<?php if (isset($pass_verif)) { echo $pass_verif; } ?>" /><br />
                        <?php if (isset($erreur_pass_verif)) { echo '<span class="form-error">' . $erreur_pass_verif . '</span><br /><br />'; } ?><br />

                        <hr />
                        <div class="center"><input type="submit" name="formcompte" value="Modify my profile" /></div><br />
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