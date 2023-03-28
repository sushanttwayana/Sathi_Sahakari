<?php session_start();?>
<?php
        $host="localhost";
        $user="root";
        $password="";
        $database="sathisahakari";
        $con = mysqli_connect($host,$user,$password,$database);

        if(!$con){
            die('Could not Connect My Sql:');
        }

        if(isset($_POST['login']))
        {	
            // variable for student 
	        $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "select * from cashiertable where empid='$username'";
            $result = mysqli_query($con, $sql);
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $hash = $row['password'];

                    // Verify the hash against the password entered
                    $verify = password_verify($password, $hash);
                    
                    // Print the result depending if they match
                    if ($verify) {
                        $_SESSION["username"]= $username;
                        header('location:../cashier panel/cashierdashboard.php?success='.'true');
                    } 
                    else {
                        header('location:loginforcashier.php?success='.'false');
                    }
                }
            }
            else {
                header('location:loginforcashier.php?success='.'false');
            }
	        mysqli_close($con);
        }
?>