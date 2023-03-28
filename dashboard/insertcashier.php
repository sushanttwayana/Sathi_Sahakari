<?php
        $host="localhost";
        $user="root";
        $password="";
        $database="sathisahakari";
        $con = mysqli_connect($host,$user,$password,$database);

        if(!$con){
            die('Could not Connect My Sql:');
        }

        if(isset($_POST['submit']))
        {	
            // variable for cashier
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $mobileno = $_POST['no'];
            $empid = $_POST['e_id'];
            $level = $_POST['level'];
            $hash = password_hash($mobileno, PASSWORD_DEFAULT);
	       
            //inserting in user table
	        $sql = "INSERT INTO `cashiertable`(`empid`, `firstname`, `lastname`, `mobileno`, `level`, `password`) VALUES ('$empid','$fname','$lname','$mobileno','$level','$hash')";
            if (mysqli_query($con, $sql)) {
                header('location:../dashboard/dashboard.php');
            }else {
                echo 'Cashier registration failed';
            }

	        mysqli_close($con);
        }
?>
