<?php
session_start();
unset($_SESSION['is_login']);
unset($_SESSION['id']);
header("location:../login.php");
exit;

?>