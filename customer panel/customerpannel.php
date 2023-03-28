<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is the website about sathi sahakari">
    <meta name="keywords" content="Sahakari, Finance website">
    <meta name="author" content="Anjan Prajapati, Dipen Shrestha, Samesh Bajracharya, Sushant Twayana">
    <title>Customer Pannel</title>
    <!-- favicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../favicon_io/site.webmanifest">
    <!--link to css-->
		<link rel="stylesheet" type="text/css" href="styles.css">
    <!--To include external js-->
    <script src="name.js"></script>
    <!--link to font awesome-->
		<link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        
        /* Popup form styling */
        .popup-div, .popup-div1, .popup-div2{
            background: rgba(0, 0, 0, 0.7) ;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            display: none;
            justify-content: center;
            align-items: center;
        }

        .popup-div1{
            overflow-x: scroll;
            overflow-y: visible;
        }

        .popup-content{
            height: 650px;
            width: 460px;
            background-color: #1a4564;
            padding: 25px 50px 50px 50px;
            border-radius: 20px;
            position: relative;
            box-shadow: 4px 4px 8px #030f09;
            position: absolute;
        }

        .popup-content1{
            margin-top: 200px;
            min-height: 550px;
            width: 800px;
            background-color: #1a4564;
            padding: 25px 50px 50px 50px;
            border-radius: 20px;
            position: relative;
            box-shadow: 4px 4px 8px #030f09;
            position: absolute;
        }

        .popup-content2{
            height: 480px;
            width: 800px;
            background-color: #1a4564;
            padding: 25px 50px 50px 50px;
            border-radius: 20px;
            position: relative;
            box-shadow: 4px 4px 8px #030f09;
            position: absolute;
        }
        .close, .close1, .close2{
            position: absolute;
            top: -15px;
            right: -15px;
            background: #fff;
            height: 20px;
            width: 20px;
            border-radius: 50%;
            cursor: pointer;
        } 

        a:link{ 
            text-decoration: none;
        }

        a{
            color: black;
        }

        a:hover{
            color: #221f1f;
        }

        input[type=text], select {
                width: 100%;
                padding: 12px 20px;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
        input[type=number], select {
                width: 100%;
                padding: 12px 20px;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
        }
        .senderdetail{
            margin-top: 20px;
        }

        .recieverdetail{
            margin-top: 40px;
        }

        #i1, #i2, #i3, #i4, #i5{
            width: 350px;
            height: 10px;
            padding: 20px;
            background-image: linear-gradient(#d2d2d2,#d3d3d3);
            margin-top: 20px;
            border-radius: 5px;
        }

        #submit_button{
            width: 350px;
            height: 45px;
            margin-top: 30px;
            font-weight: bold;
            font-size: 15px;
            border-radius: 5px;
            color: #fff;
            background-color: #08a454;
            border-color: #08a454;
        }
    
        #submit_button:hover{
            background-color:#0c6e3c ;
        } 

        /* for transfer history table */
        #transfer-history {
            font-family: poppins;
            border-collapse: collapse;
            width: 100%;
        }

        #transfer-history td, #customers th {
            border: 1px solid #ddd;
            padding: 20px;
        }

        #transfer-history tr:nth-child(even){background-color: #f2f2f2;}
        #transfer-history tr:nth-child(odd){background-color: #08a454;}

        #transfer-history th {
            padding-top: 12px;
            padding-bottom: 12px;
            padding-left: 7px;
            text-align: left;
            background-color: #046aaa;
            font-weight: 200;
            color: white;
        }

        /* My information css */
        .client{
            font-size: large;
            display: flex;
            flex-direction: row;
            justify-content:space-evenly;
            align-items:center;
            border-radius: 50px;
            color: #000;
        }

        .img{
            width: 200px;
            height: 250px;
            border-radius: 10px;
        }

        .id{
            display: flex;
        }

        .topic_id{
            font-weight: bold;
        }

        .data_id{
            font-style: oblique;
        }
        .info{
            padding: 10px;
            color: white;
        }

    </style>

    <script type="text/javascript">
        function dis1(){
                document.querySelector(".popup-div").style.display="flex";
                document.querySelector("body").style.overflow="hidden";
        }
        function dis2(){
                document.querySelector(".popup-div1").style.display="flex";
                document.querySelector("body").style.overflow="hidden";
        }
        function dis3(){
                document.querySelector(".popup-div2").style.display="flex";
                document.querySelector("body").style.overflow="hidden";
        }
        function mouseOut(){
            const e1 = document.getElementById('i2');
                const e2 = document.getElementById('i4');
                if (e1.value == e2.value) {-
                    alert('You cannot transfer money to your own account');
                    e2.focus();
                }
        }
       
        
    </script>
</head>
<body>
        <?php
        $host="localhost";
        $user="root";
        $pass = "";
        $dbname= "sathisahakari";
        
        $conn = mysqli_connect($host, $user, $pass, $dbname) or die();
        $accno = $_SESSION["username"];

        $sql = "SELECT * FROM customertable WHERE accno = $accno ";
        $result = mysqli_query($conn, $sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $accno = $row['accno'];
                $cfn = $row['cfn'];
                $cmn = $row['cmn'];
                $cln = $row['cln'];
                $dob = $row['dob'];
                $email = $row['email'];
                $mob = $row['mob'];
                $cno = $row['cno'];
                $idate = $row['idate'];
                $gender = $row['gender'];
                $nat = $row['nat'];
                $acctype = $row['acctype'];
                $prof = $row['prof'];
                $ppimg = $row['ppimg'];
                $cimg = $row['cimg'];
                $street = $row['street'];
                $mun = $row['mun'];
                $wno = $row['wno'];
                $district = $row['district'];
                $ffn = $row['ffn'];
                $fmn = $row['fmn'];
                $fln = $row['fln'];
                $mfn = $row['mfn'];
                $mmn = $row['mmn'];
                $mln = $row['mln'];
                $gfn = $row['gfn'];
                $gmn = $row['gmn'];
                $gln = $row['gln'];
                $balance = $row['balance'];
                $pass = $row['pass'];
            }
        }

        ?>
    <!-- <img src="./sathi sahakari.png" width="100%"> -->
    <div class="customer-pannel-container">
            <section class="theme">
                <img src="../images/sathi sahakari.png" width="100%" height="120px" alt="theme">
            </section>
        <div class="pannel-middle">
            <div class="pannel-middle-left">
                <div class="nameplate">
                    <div class="pannel-profile">
                        <div class="profile-pic">
                            <img src="<?php global $ppimg; echo $ppimg ?>" width="35px" class="profile-img">
                        </div>
                        <div class="profile-name">
                            <p class="profile-text"><?php global $cfn; echo $cfn ?> <?php global $cmn; echo $cmn ?> <?php global $cln; echo $cln ?></p>
                        </div>
                    </div>
                    <div class="pannel-logout">
                         <a href="../html/home.php"><p class="logout-text"><i class="fa fa-sign-out fa-lg"></i> Logout</p></a>
                    </div>
                </div>
                <div class="info-pannel">
                    <div class="info-title">
                        <p class="topic1">CURRENT ACCOUNT SUMMARY</p>
                        <br>
                        <center><hr width="70%" style="height:1px;border-width:0;background-color:rgba(255, 255, 255, 0.382)"></center>
                    </div>
                    <div class="info-title">
                        <p class="topic3">ACCOUNT NUMBER : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php global $accno; echo $accno ?></p>
                    </div>
                    <div class="info-title">
                        <p class="topic3">AMOUNT : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. <?php global $balance; echo $balance ?></p>
                    </div>
                    <div class="info-title">
                        <p class="topic3">ACCOUNT TYPE : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php global $acctype; echo $acctype ?></p>
                    </div>
                </div>
            </div>
           

            <div class="pannel-icon">
                <div class="pannel-icon-top">
                    <div class="myinfo">
                        <a href="#" class="btn" id="btn1" onclick="dis3();">
                            <div class="icon-img2">
                                <i class="fa fa-users fa-3x"></i>
                            </div>
                            <div class="quick-icon">
                                <p class="topic">My <br>Information</p>
                            </div>
                        </a>
                    </div>
                    <div class="transfer-cash">
                        <a href="#" class="btn" id="btn1" onclick="dis1();">
                            <div class="icon-img">
                                <i class="fa fa-money fa-4x"></i>
                            </div>
                            <div class="quick-icon">
                            <p class="topic">Transfer <br>Cash</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="pannel-icon-bottom">
                    <div class="load-wallet">
                            <div class="icon-img">
                                <i class="fa fa-refresh fa-3x"></i>
                            </div>
                            <div class="quick-icon">
                                <a href="khaltiintregration.php"><p class="topic">Load <br>Wallet</p></a>
                            </div>
                    </div>
                    <div class="transfer-histroy">
                        <a href="#" class="btn" id="btn1" onclick="dis2();">
                            <div class="icon-img1">
                                <i class="fa fa-history fa-3x"></i>
                            </div>
                            <div class="quick-icon">
                                <p class="topic">Transfer <br>History</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popup form for cash transfer -->
            <div class="popup-div">
                <div class="popup-content">
                    <img src="../images/cross.png" class="close" width="20px">
                    <form method="POST" action="cashtransfer.php">
                        <div class="transfermoney">
                            <center><h2 style="color:white;">Cash Transfer</h2></center>
                            <div class="senderdetail">
                                <h3 style="color:white;">Sender Details</h3>
                                <input type="text" id="i1" name="sendername" value="<?php global $cfn; echo $cfn ?> <?php global $cmn; echo $cmn ?> <?php global $cln; echo $cln ?>" required readonly>
                                <input type="text" id="i2" name="senderaccnum" value="<?php echo $_SESSION['username'];?>" required readonly>
                            </div>
                            <div class="recieverdetail">
                                <h3 style="color:white;">Reciever Details</h3>
                                <input type="text" id="i3" name="recivername" placeholder="Reciver Name" required>
                                <input type="text" id="i4" name="reciveraccnum" placeholder="Reciver Account Number" onmouseout="mouseOut()" required>
                                <input type="number" id="i5" name="amount" min="500" max="100000" placeholder="Amount" required>
                                <input type="text" id="i3" name="rem" placeholder="Remarks" required>
                            </div>
                        </div>
                        <div class="button">
                            <button id="submit_button" name="submitdetail" onclick="check()" >Proceed</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Popup form for transfer history -->
            <div class="popup-div1">
                <div class="popup-content1">
                    <img src="../images/cross.png" class="close1" width="20px">
                    <center><h2 style="color:white;">Transcation History</h2></center>
                    <br>
                    <table id="transfer-history">
                        <tr>
                          <th>Transaction ID</th>
                          <th>Transaction Date</th>
                          <th>Transaction Type</th>
                          <th>Remark</th>
                          <th>Amount</th>
                        </tr>
                        <?php
                            $host="localhost";
                            $user="root";
                            $pass = "";
                            $dbname= "sathisahakari";
                            
                            $conn = mysqli_connect($host, $user, $pass, $dbname) or die();
                            $accno = $_SESSION["username"];

                            $sql = "SELECT * FROM transtable WHERE accno = $accno ";
                            $result = mysqli_query($conn, $sql);
                            if($result){
                                while($row = mysqli_fetch_assoc($result)){
                                    $tid = $row['tid'];
                                    $amt = $row['amt'];
                                    $vdate = $row['vdate'];
                                    $tpar = $row['tpar'];
                                    $rem = $row['rem'];
                        ?>
                                    <tr>
                                        <td><?php echo $tid?></td>
                                        <td><?php echo $vdate?></td>
                                        <td><?php echo $tpar?></td>
                                        <td><?php echo $rem?></td>
                                        <td><?php echo $amt?></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                      </table>
                </div>
            </div>

            <!-- Popup form for my information -->
            <div class="popup-div2">
                <div class="popup-content2">
                    <img src="../images/cross.png" class="close2" width="20px">
                    <center><h2 style="color:white;">My Information</h2></center>
                    
                    <br>
                    <div class="client">
                        <img class="img" src="<?php global $ppimg; echo $ppimg ?>" alt="Bank Logo">
                    <div class="id">
                        <div class="topic_id">
                          <p class="info">Name </p>
                          <p class="info">Gender</p>
                          <p class="info">Date of Birth</p>
                          <p class="info">Mobile No.</p>
                          <p class="info">Email Address</p>
                          <p class="info">Address</p>
                          <p class="info">Account No.</p>
                          <p class="info">Account Type</p>
                          <p class="info">Loan Status</p>
                        </div>
                        <div class="data_id"> 
                            <p class="info"> :&nbsp;&nbsp;<?php global $cfn; echo $cfn ?> <?php global $cmn; echo $cmn ?> <?php global $cln; echo $cln ?></p>
                            <p class="info"> :&nbsp;&nbsp;<?php global $gender; echo $gender ?> </p>
                            <p class="info"> :&nbsp;&nbsp;<?php global $dob; echo $dob ?></p>
                            <p class="info"> :&nbsp;&nbsp;<?php global $mob; echo $mob ?> </p>
                            <p class="info"> :&nbsp;&nbsp;<?php global $email; echo $email ?></p>
                            <p class="info"> :&nbsp;&nbsp;<?php global $street; echo $street ?>, <?php global $mun; echo $mun ?></p>
                            <p class="info"> :&nbsp;&nbsp;<?php global $accno; echo $accno ?></p>
                            <p class="info"> :&nbsp;&nbsp;<?php global $acctype; echo $acctype ?></p>
                            <p class="info"> :&nbsp;&nbsp;None </p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <script>
                document.querySelector(".close").addEventListener("click", function(){
                    document.querySelector(".popup-div").style.display = "none";
                    document.querySelector("body").style.overflow="auto";
                    location.reload();
                })
                document.querySelector(".close1").addEventListener("click", function(){
                    document.querySelector(".popup-div1").style.display = "none";
                    document.querySelector("body").style.overflow="auto";
                    location.reload();
                })
                document.querySelector(".close2").addEventListener("click", function(){
                    document.querySelector(".popup-div2").style.display = "none";
                    document.querySelector("body").style.overflow="auto";
                    location.reload();
                })
            </script>
        <!-- footer -->
        <div id="footer">
            <footer>
                <div class="copy">
                    <div id="copyright">
                        <hr style="height:1px;border-width:0;background-color:rgba(255, 255, 255, 0.171)">
                        <br>
                        <i class="fa fa-copyright"></i> &nbsp; Sathi Sahakari - 2022 All rights reserved 
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>