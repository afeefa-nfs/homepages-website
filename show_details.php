<?php
require_once('config.inc.php');
if (!isset($_GET['id']))
    redirect();
$id = $_GET['id'];
$conn_str = DB_SYS . ':host=' . DB_HOST . ';dbname=' . DB_NAME;
try {
    $pdo = new PDO($conn_str, DB_USER, DB_PASS);
    $sql = 'SELECT * FROM profile WHERE id=:id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    if ($p = $stmt->fetch()) {
        $name = $p['name'];
        $city = $p['city'];
        $gender = $p['gender'];
        $email = $p['email'];
        $phonenumber = $p['phonenumber'];
        $dob = $p['dob'];
        $address = $p['address'];
        $qualification = $p['qualification'];
        $hobbies = $p['hobbies'];
        $skills = $p['skills'];
    } else {
        redirect();
    }
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>
            <?php echo $name ?>
        </title>
        <link rel="stylesheet" href="cssfile.css?v=<?php echo time(); ?>">
        <meta name="viewport" content="width=device-width,initial-scale=1">
    </head>

    <body>
        <div class="container">
            <?php include_once('header.php'); ?>

            <div class="header">
                <div class="border1">
                    <h1 class="addpadding">
                        <img src="icon1.png" width="150px"><br>
                        <?php echo $name ?>
                    </h1>
                </div>
            </div>

            <div class="nav">
                <div class="borders"><b>City:<br> </b>
                    <?php echo $city ?>
                </div><br>
            </div>

            <div class="main">
                <div class="borders"><b>Gender:<br> </b>
                    <?php echo $gender ?>
                </div><br>
                <div class="borders"><b>Address:<br> </b>
                    <?php echo $address ?>
                </div><br>
                <div class="borders"><b>Qualification:<br> </b>
                    <?php echo $qualification ?>
                </div><br>
                <div class="borders"><b>Hobbies and Interests:<br> </b>
                    <?php echo $hobbies ?>
                </div><br>
                <div class="borders"><b>Skills:<br> </b>
                    <?php echo $skills ?>
                </div><br>
            </div>

            <div class="aside">
                <div class="borders"><b>DOB:<br> </b>
                    <?php echo $dob ?>
                </div><br>
            </div>

            <div class="footer">
                <div class="borders"><b>Email:<br> </b>
                    <?php echo $email ?>
                </div><br>
                <div class="borders"><b>PhoneNo:<br> </b>
                    <?php echo $phonenumber ?>
                </div><br>
            </div>

        <?php
    } catch (PDOException $e) {
        die($e->getMessage());
    }
        ?>
        </div>
    </body>

    </html>