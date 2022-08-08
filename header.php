<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="cssfile.css?v=<?php echo time(); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="#" class="navbar-brand">User Profiles<img src="newicon.png" width="50px"></a>
    </div>
    <ul class="nav navbar-nav">
      <li>   <a href="add_user.php" class="nav-link"> Login</a>    </li>
      <li>   <a href="logout_user.php" class="nav-link"> Logout</a>  </li>
      <li>  <a href="index.php" class="nav-link"> Show Profiles</a>  </li>
      <li>  <a href="add_profile.php" class="nav-link"> Add Profile</a>  </li>
	  <li> <a href="update_profile.php" class="nav-link"> Update Profile</a> </li>
    </ul>
  </div>
</nav>
<br>
</body>
</html>