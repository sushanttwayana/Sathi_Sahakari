<?php
   
   include 'db.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobileno = $_POST['no'];
    $empid = $_POST['e_id'];
    $level = $_POST['level'];
    $hash = password_hash($mobileno, PASSWORD_DEFAULT);

   $sql = "UPDATE cashiertable SET empid ='$empid', firstname ='$fname', lastname='$lname', mobileno = '$mobileno', level = '$level', password = '$hash' WHERE empid = $empid";

   $result = mysqli_query($conn, $sql);

   if($result){
    header("location:dashboard.php");
   }
   
?>