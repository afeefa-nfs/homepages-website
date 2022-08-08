<?php
require_once('config.inc.php');
$conn_str = DB_SYS . ':host=' . DB_HOST . ';dbname=' . DB_NAME;
try {
    $pdo = new PDO($conn_str, DB_USER, DB_PASS);
    $username = "";
    $password = "";
    $remember = false;
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    } else
        redirect();
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    } else
        redirect();
    if (isset($_POST['rememberme']))
        $remember = $_POST['rememberme'];
    if ($username == "" || $password == "")
        redirect();
    $sql = "SELECT * FROM userdata WHERE username=:user AND password=:pass";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":user", $username, PDO::PARAM_STR);
    $stmt->bindParam(":pass", $password, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->fetch()) {
        if ($remember == "on") {
            $rememberme = $_POST['rememberme'];
            $expiry = time() + 60 * 60 * 24 * 30;
            setcookie('rememberme', $rememberme, $expiry);
            session_start();
            $_SESSION['username'] = $username;
        }
    } else {
        header('Location: wrong_login.php', true, 302);
    }

    $stmt1 = $pdo->prepare("SELECT FOUND_ROWS()");
    $stmt1->execute();
    $count = $stmt1->fetchColumn();
    echo $count;

    if ($count == 1) {
        header('Location: successful_login.php', true, 302);
    } else {
        header('Location: wrong_login.php', true, 302);
    }
} catch (PDOException $e) {
    die($e->getMessage());
}
