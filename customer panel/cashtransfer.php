<?php
        $host="localhost";
        $user="root";
        $password="";
        $database="sathisahakari";
        $con = mysqli_connect($host,$user,$password,$database);

        if(!$con){
            die('Could not Connect My Sql:');
        }

        if(isset($_POST['submitdetail']))
        {	
            // variable for cash transfer
            $sendername = $_POST['sendername'];
            $senderaccnum = $_POST['senderaccnum'];
            $recivername = $_POST['recivername'];
            $reciveraccnum = $_POST['reciveraccnum'];
            $rem = $_POST['rem'];
            $amount = $_POST['amount'];
            $amount1 = $amount;
            $id = rand(10000, 99999); 
            $date = date('Y-m-d');
            $tpar1 = 'withdraw';
            $tpar2 = 'deposit';
            $sql = "SELECT * FROM customertable WHERE accno = $senderaccnum";
            $result = mysqli_query($con, $sql);
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $amt = $row['balance'];
                }
            }
            if($amt >= $amount){
                // $sql = "INSERT INTO `transtable`(`tid`, `accno`, `amt`, `vdate`, `tpar`, `rem`) VALUES ('$id','$reciaccnum','$amount','$date','$tpar2','$rem')";
                // $result = mysqli_query($con, $sql);

                $sql = "INSERT INTO `transtable`(`tid`, `accno`, `amt`, `vdate`, `tpar`, `rem`) VALUES ('$id','$senderaccnum','$amount','$date','$tpar1','$rem')";
                if(mysqli_query($con, $sql)){
                    $amt1 = $amt - $amount;
                    $sql = "UPDATE `customertable` SET `balance`='$amt1' WHERE accno = $senderaccnum";
                    $result = mysqli_query($con, $sql);

                    $amt2 = $amt + $amount1;
                    $sql = "UPDATE `customertable` SET `balance`='$amt2' WHERE accno = $reciveraccnum";
                    $result = mysqli_query($con, $sql);
                    if($result){
                        header("location:customerpannel.php");
                    }
                }else {
                        header("location:customerpannel.php");
                    }
            }
        }else {
            header("location:customerpannel.php");
        }

	        mysqli_close($con);
?>

