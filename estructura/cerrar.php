<?php
session_start();
unset($_SESSION['k_username']);
header("Location: ../index.php");
?>