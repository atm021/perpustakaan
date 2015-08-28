<?php
session_start();
unset($_SESSION['UserOK']);
session_destroy();

header("location: login.php");
?>