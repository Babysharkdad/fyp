<?php
session_start();
unset($_SESSION["counsellorUsername"]);
unset($_SESSION["counsellorName"]);
header("Location:logincoun.php");
?>