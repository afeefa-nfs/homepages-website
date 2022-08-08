<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Already Logged in </title>
    <link rel="stylesheet" href="cssfile.css?v=<?php echo time(); ?>">
</head>

<body>
    <br>
    <a href="index.php">Show Profiles</a> |
    <a href="add_profile.php">Add a new Profile</a> |
    <a href="logout_user.php">User Logout</a> |
</body>

</html>
<div class="new">
<?php
echo "<br><br><h1> Hey $_SESSION[username]! You have successfully logged in. </h1>";
?>
</div>