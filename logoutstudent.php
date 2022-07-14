<?php
session_start();
unset($_SESSION["studentUsername"]);
unset($_SESSION["studentName"]);
header("Location:loginstud.php");
?>