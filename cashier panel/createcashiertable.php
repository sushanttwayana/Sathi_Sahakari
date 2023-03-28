<?php 
    $host="localhost";
    $user="root";
    $password="";
    $database="sathisahakari";
    $con = mysqli_connect($host,$user,$password,$database);

    // creating cashier tables
    $sql = "CREATE TABLE cashiertable(
        empid int NOT NULL,
        primary key(empid),
        firstname varchar(255) not null,
        lastname varchar(255) not null,
        mobileno varchar(10) not  null unique,
        level varchar(50) not null,
        password varchar(255) not null
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
