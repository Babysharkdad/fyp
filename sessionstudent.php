<?php
   include('conn.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select studentUsername from student where studentUsername = '$studentUsername' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['studentUsername'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:loginstud.php");
      die();
   }
?>