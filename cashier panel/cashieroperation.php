
<?php
        $host="localhost";
        $user="root";
        $password="";
        $database="sathisahakari";
        $con = mysqli_connect($host,$user,$password,$database);

        if(!$con){
            die('Could not Connect My Sql:');
        }

        if(isset($_POST['validate']))
        {	
            // variable for cashier
            $id = $_GET['id'];
            $accno = $_POST['accno'];
            $amount = $_POST['amount'];
            $date = date('Y-m-d');
            $tran = $_POST['tran'];
            $rem = $_POST['rem'];
            $sql = "SELECT * FROM `customertable` WHERE accno = $accno";
            $result = mysqli_query($con, $sql);
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $amt = $row['balance'];
                }
            }

            if($tran == 'cashwithdrawl'){
                if($amt >= $amount){
                    $sql = "INSERT INTO `transtable`(`tid`, `accno`, `amt`, `vdate`, `tpar`, `rem`) VALUES ('$id','$accno','$amount','$date','$tran','$rem')";
                    if (mysqli_query($con, $sql)) {
                        $amount = $amt - $amount;
                        $sql = "UPDATE `customertable` SET `balance`='$amount' WHERE accno = $accno";
                        $result = mysqli_query($con, $sql);
                        if($result){
                            echo 'Transcation is successful';
                            header("location:cashierdashboard.php");
                        }
                    }
                }else {
                    echo 'Customer registration failed';
                    header("location:cashierdashboard.php");
                }
            }else{
                $sql = "INSERT INTO `transtable`(`tid`, `accno`, `amt`, `vdate`, `tpar`, `rem`) VALUES ('$id','$accno','$amount','$date','$tran','$rem')";
                if (mysqli_query($con, $sql)) {
                    $amount = $amt + $amount;
                    $sql = "UPDATE `customertable` SET `balance`='$amount' WHERE accno = $accno";
                    $result = mysqli_query($con, $sql);
                    if($result){
                        echo 'Transcation is successful';
                        header("location:cashierdashboard.php");
                    }else {
                        echo 'Customer registration failed';
                        header("location:cashierdashboard.php");
                    }
                }
            }
        }else {
            echo 'Customer registration failed';
            header("location:cashierdashboard.php");
        }

	        mysqli_close($con);
?>

