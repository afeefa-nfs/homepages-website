<?php
require_once('config.inc.php');
$conn_str = DB_SYS . ':host=' . DB_HOST . ';dbname=' . DB_NAME;
try {
  $pdo = new PDO($conn_str, DB_USER, DB_PASS);

  $name = "";
  $city = "";
  $gender = "";
  $email = "";
  $phonenumber = "";
  $dob = "";
  $address = "";
  $qualification = "";
  $hobbies = "";
  $skills = "";


  if (isset($_POST['name']))
    $name = $_POST['name'];
  else
    redirect();

  if (isset($_POST['city']))
    $city = $_POST['city'];
  else
    redirect();

  if (isset($_POST['gender']))
    $gender = $_POST['gender'];
  else
    redirect();

  if (isset($_POST['email']))
    $email = $_POST['email'];
  else
    redirect();

  if (isset($_POST['phonenumber']))
    $phonenumber = $_POST['phonenumber'];
  else
    redirect();

  if (isset($_POST['dob']))
    $dob = date('Y-m-d', strtotime($_POST['dob']));
  else
    redirect();

  if (isset($_POST['address']))
    $address = $_POST['address'];
  else
    redirect();

  if (isset($_POST['qualification'])) {
    $qualification = $_POST['qualification'];
    $q = implode(",  ", $qualification);
  } else
    redirect();

  if (isset($_POST['hobbies'])) {
    $hobbies = $_POST['hobbies'];
    $h = implode(",  ", $hobbies);
  } else
    redirect();

  if (isset($_POST['skills'])) {
    $skills = $_POST['skills'];
    $s = implode(",  ", $skills);
  } else
    redirect();


  if ($name == "" || $city == "" || $gender == "" || $email == "" || $phonenumber == "" || $dob == "" || $address == "" || $q == "" || $h == "" || $s == "") {
    redirect();
  }

  $sql = "INSERT INTO profile(name,city,gender,email,phonenumber,dob,address,qualification,hobbies,skills)
    VALUES(:name,:city,:gender,:email,:phonenumber,:dob,:address,:qualification,:hobbies,:skills)";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(':name', $name, PDO::PARAM_STR);
  $stmt->bindParam(':city', $city, PDO::PARAM_STR);
  $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
  $stmt->bindParam(':email', $email, PDO::PARAM_STR);
  $stmt->bindParam(':phonenumber', $phonenumber, PDO::PARAM_STR);
  $stmt->bindParam(':dob', $dob, PDO::PARAM_STR);
  $stmt->bindParam(':address', $address, PDO::PARAM_STR);
  $stmt->bindParam(':qualification', $q, PDO::PARAM_STR);
  $stmt->bindParam(':hobbies', $h, PDO::PARAM_STR);
  $stmt->bindParam(':skills', $s, PDO::PARAM_STR);
  $stmt->execute();
?>
  <!DOCTYPE html>
  <html>

  <head>
    <title>New Profile Added</title>
    <link rel="stylesheet" href="cssfile.css?v=<?php echo time(); ?>">
  </head>

  <body>
    <?php include_once('header.php'); ?>
    <h1 class="new"> New Profile Added </h1>
  <?php
} catch (PDOException $e) {
  die($e->getMessage());
}
  ?>
  </body>

  </html>