<?php
include('conn.php');

if(isset($_GET['deleteStudent'])){
    $studentId=$_GET['deleteStudent'];


    $sql = "DELETE FROM student WHERE studentId='$studentId'";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script> alert('delete successful') </script>";
        echo "<script> window.location='studentlist.php'; </script>";
    }else{
        die(mysqli_error($conn));
    }
}

?>