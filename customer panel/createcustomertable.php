<?php 
    $host="localhost";
    $user="root";
    $password="";
    $database="sathisahakari";
    $con = mysqli_connect($host,$user,$password,$database);

    // creating cashier tables
    //BLOB - binary large object
    $sql = "CREATE TABLE customertable(
        accno varchar(255) NOT NULL,
        primary key(accno),
        cfn varchar(255) not null,
        cmn varchar(255) not null,
        cln varchar(255) not null,
        dob date not null,
        email varchar(255) not null unique,
        mob varchar(10) not  null unique,
        cno varchar(255) not null unique,
        idate date not null,
        gender varchar(255) not null,
        nat varchar(255) not null,
        acctype varchar(255) not null,
        prof varchar(255) not null,
        ppimg varchar(455)  not null,
        cimg varchar(455)  not null,
        street varchar(255) not null,
        mun varchar(255) not null,
        wno varchar(20) not null,
        district varchar(255) not null,
        ffn varchar(255) not null,
        fmn varchar(255) not null,
        fln varchar(255) not null,
        mfn varchar(255) not null,
        mmn varchar(255) not null,
        mln varchar(255) not null,
        gfn varchar(255) not null,
        gmn varchar(255) not null,
        gln varchar(255) not null,
        balance varchar(255),
        pass varchar(255)
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
