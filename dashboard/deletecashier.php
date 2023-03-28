<?php

    include 'db.php';

    if(!$conn){
        die('Could not Connect My Sql:.mysqli_error()');
    }

    $id = $_GET ['id'];

    $sql = "DELETE FROM cashiertable WHERE empid = $id";

    $result = mysqli_query($conn,$sql);

    if($result){
        header("location:dashboard.php");
    }

?>