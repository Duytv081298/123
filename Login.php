    <!DOCTYPE html>
    <html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>Day 001 Login Form</title>
      <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="css/style.css">
  </head>
  <?php
  session_start();
  if(isset($_SESSION['logged_in'])){
    if ($_SESSION['logged_in'] && $_SESSION['role'] =='admin')
    {
        header('Location: admin.php');
    }

    if ($_SESSION['logged_in'] && $_SESSION['role'] =='staff')
    {
        header('Location: trainingStaff.php');
    }

    if ($_SESSION['logged_in'] && $_SESSION['role'] =='trainer')
    {
        header('Location: trainerStaff.php');
    }


}
?>
<body>
    <form method="POST" action="Checklogin.php">
      <div class="login-wrap">

        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" class="input" name="user">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" name="pass">
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <button type="submit" name="login" class="button">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>

</html>
