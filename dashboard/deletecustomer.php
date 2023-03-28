<?php

    include 'db.php';

    if(!$conn){
        die('Could not Connect My Sql:.mysqli_error()');
    }

    $accno = $_GET ['accno'];

    $sql = "DELETE FROM customertable WHERE accno = $accno";

    $result = mysqli_query($conn,$sql);

    if($result){
        header("location:dashboard.php");
    }

?>