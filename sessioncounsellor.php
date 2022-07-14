<?php
   include('conn.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select counsellorUsername from counsellor where counsellorUsername = '$counsellorUsername' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['counsellorUsername'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:logincoun.php");
      die();
   }
?>