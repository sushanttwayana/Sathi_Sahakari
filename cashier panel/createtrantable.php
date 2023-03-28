<?php 
    $host="localhost";
    $user="root";
    $password="";
    $database="sathisahakari";
    $con = mysqli_connect($host,$user,$password,$database);

    // creating cashier tables
    $sql = "CREATE TABLE transtable(
        tid varchar(255) NOT NULL unique,
        primary key(tid),
        accno varchar(255) NOT NULL,
        amt varchar(7) NOT NULL ,
        vdate varchar(50) NOT NULL,
        tpar varchar(255) NOT NULL,
        rem varchar(255) NOT NULL
    )";

    // Execute query
    $result = mysqli_query($con,$sql);
    if($result)
    {
        echo "Table created successfully<br>";
    }
    else
    {
        echo "Table not created due to ". mysqli_error($con)."<br>";
    }

    mysqli_close($con);
?>
