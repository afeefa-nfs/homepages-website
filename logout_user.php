<?php
session_start();
session_destroy();
header('Location: show_logout.php',true,302);
?>