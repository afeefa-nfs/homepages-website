<?php
require_once('config.inc.php');
$conn_str = DB_SYS . ':host=' . DB_HOST . ';dbname=' . DB_NAME;
try {
    $pdo = new PDO($conn_str, DB_USER, DB_PASS);
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title> Login </title>
        <link rel="stylesheet" href="cssfile.css?v=<?php echo time(); ?>">
    </head>

    <body>
        <?php include_once('header.php'); ?>
        <form method="post" action="add_user_action.php">
            <fieldset>
                <legend><b>Add Login Info </b></legend><br>
                <table>
                    <tr>
                        <td><label for="username"><b>Username</b></label></td>
                        <td><input type="text" placeholder="Enter Username" name="username" required><br></td>
                    </tr>
                    <tr>
                        <td> <br> </td>
                    </tr>
                    <tr>
                        <td><label for="password"><b>Password</b></label></td>
                        <td><input type="password" placeholder="Enter Password" name="password" required><br></td>
                    </tr>
                    <tr>
                        <td> <br> </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" checked="checked" name="rememberme"> Remember me <br></td>
                    </tr>
                    <tr>
                        <td> <br> </td>
                    </tr>
                </table>
                <input class="class3" type="submit" value="login" name="login">
            </fieldset>
        </form>
    <?php
} catch (PDOException $e) {
    die($e->getMessage());
}
    ?>
    </body>

    </html>