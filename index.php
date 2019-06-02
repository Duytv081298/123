<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="style3.css">
</head>
<body>

<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a class="active" href="#about">Admin</a></li>
</ul>

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="content">
        <h3 class="room-title">Manage Staff</h3>
        <hr />
        <div class="device-icon"><i class="fa fa-lightbulb-o"></i></div>
        <a class="button success-button toggle-button" href="ManageStaff.php">Manage</a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="content">
        <h3 class="room-title">Manage Trainning</h3>
        <hr />
        <div class="device-icon"><i class="fa fa-plug"></i></div>
        <a class="button success-button toggle-button enabled" href="#">Manage</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>