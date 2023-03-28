<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashier Pannel</title>
    <link rel="stylesheet" href="cashier.css">
    <script src="https://kit.fontawesome.com/50aa9099eb.js" crossorigin="anonymous"></script>
    <!-- favicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../favicon_io/site.webmanifest">

    <script>
        
        function validate(){
            // get today's date as a string in the format "YYYY-MM-DD"
        const today = new Date().toISOString().substr(0, 10);

        // get the input element
        const dateInput = document.getElementById("date");

        // set the minimum and maximum dates to today
        dateInput.min = today;
        dateInput.max = today;

        // set the input value to today's date
        dateInput.value = today;
        if(dateInput.value != today){
            alert("The transaction should be todays date!!!");
        }
                };
       
        function re() {
            location.reload();
        }

        function dis(){
                document.querySelector(".m-container").style.display="flex";
                document.querySelector("body").style.overflow="hidden";
        }

        function dis1(){
                document.querySelector(".popup-container").style.display="flex";
                document.querySelector("body").style.overflow="hidden";
        }
        // function update(){
        //         const opass = <?php echo '$pass'?>;
        //         const oldPassword = document.getElementById("old-password").value;
        //         const newPassword = document.getElementById("new-password").value;
        //         const confirmPassword = document.getElementById("confirm-password").value;
        //         if (oldPassword !== opass) {
        //             alert("Old password do not match!");
        //             return;
        //         }
        //         if (newPassword !== confirmPassword) {
        //             alert("New password and confirm password do not match!");
        //             return;
        //         }
                
        //         const hasUppercase = /[A-Z]/.test(newPassword);
        //         const hasLowercase = /[a-z]/.test(newPassword);
        //         const hasNumber = /\d/.test(newPassword);
        //         const hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/.test(newPassword);
                
        //         if (newPassword.length < 8) {
        //             alert("Password must be at least 8 characters long!");
        //         } else if (!hasUppercase || !hasLowercase) {
        //             alert("Password must contain at least one uppercase and one lowercase letter!");
        //         } else if (!hasNumber) {
        //             alert("Password must contain at least one number!");
        //         } else if (!hasSpecialChar) {
        //             alert("Password must contain at least one special character!");
        //         } else {
        //             alert("Password updated successfully!");
        //         }
        // }
    </script>
    <style>
        /* password change css
        .popup-container {
            background-color: rgba(0,0,0,0.5);
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            display: none;
            }

            form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            }

            .form-group {
            margin-bottom: 20px;
            }

            label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 10px;
            }

            input[type="password"] {
            padding: 10px;
            font-size: 14px;
            width: 90%;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-right: 10px;
            }

            .button{
                background-color: #1a4564;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            font-size: 14px;
            cursor: pointer;
            float: right;
            margin-top: 20px;
            margin-right: 25px;
            }

            .close1{
            position: absolute;
            top: 136px;
            left: 900px;
            background: #fff;
            height: 20px;
            width: 20px;
            border-radius: 50%;
            cursor: pointer;
        }  */

        /* css for profile card  */
        .m-container {
        position: absolute;
        top: 0;
        display: none;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        background-color: #4475a390;
        }

        .content-container {
        border: 2px solid black;
        border-radius: 20px;
        box-shadow:  0 3px 10px rgb(0 0 0 / 0.2);
        background-color: white;
        width: 500px;
        }

        .boxA {
        border-radius: 18px 18px 0 0;
        background-color: #1a4564;
        height: 100px;
        width: auto;
        border-bottom: 2px solid black;
        }
        .img-container {
        width: 150px;
        height: 150px;
        margin: auto;
        position: relative;
        top: -80px;
        border: 2px solid black;
        border-radius: 50%;

        }

        .im{
        justify-content: center;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
        }

        .boxB{
        padding-left: 60px;
        display:flex;
        flex-direction: column;
        position: relative;
        top: -60px;
        
        }

        .boxB1 {
        display: flex;
        flex-direction: row;
        
        }
        .boxB12 {
        margin-left: 90px;
        }
        .boxB2 {
        display: flex;
        flex-direction: row;
        margin-top: 5px;
        }
        .boxB22 {
        margin-left: 40px;
        }
        .boxB3 {
        display: flex;
        flex-direction: row;
        margin-top: 5px;
        }
        .boxB32 {
        margin-left: 20px;
        }
        .boxB4 {
        display: flex;
        flex-direction: row;
        margin-top: 5px;
        }
        .boxB42 {
        margin-left: 72px;
        }
        .boxB5 {
        display: flex;
        flex-direction: row;
        margin-top: 5px;
        }
        .boxB52 {
        margin-left: 90px;
        }

        .boxC {
        
        background-color: #1a4564;
        height: 70px;
        width: auto;
        border-radius:  0px 0px 18px 18px;
        border-top: 2px solid black;
        }

        .iconc {
        display: flex;
        flex-direction: row;
        
        }

        .iconc i {
        color:#ffffff;
        padding-right: 20px;
        padding-top: 15px;
        padding-left: 70px;
        }

        .iconc i:hover {
        color: #408CD3;
        }
        .fa-brands {
        font-size: 40px;
        }
        .close{
            position: absolute;
            top: 126px;
            left: 1010px;
            background: #fff;
            height: 20px;
            width: 20px;
            border-radius: 50%;
            cursor: pointer;
        } 
        
    </style>

</head>
<body>
    
     <?php
        $host="localhost";
        $user="root";
        $pass = "";
        $dbname= "sathisahakari";
        
        $conn = mysqli_connect($host, $user, $pass, $dbname) or die();
        $username = $_SESSION["username"];

        $sql = "SELECT * FROM cashiertable WHERE empid = $username ";
        $result = mysqli_query($conn, $sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['empid'];
                $fname = $row['firstname'];
                $lname = $row['lastname'];
                $mobileno = $row['mobileno'];
                $level = $row['level'];
                $pass = $row['password'];
            }
        }
        ?>    
    <header class="header">

        <section class="theme">
            
           <img src="../images/sathi sahakari.png" width="100%" height="140px" alt="theme">
        
        <div class="theme">
    
            <ul class="icons">
                <li>
                    <a href="https://www.facebook.com">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.twitter.com">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
    
        </div>
        
    
    </section>
    
            <nav>
                <div class="center">
        
                    <!-- <h2 class="text">Navbar</h2> -->
                    
                    <div class="nav-header">
                        <button id="btn" class="nav-toggle">
                            <i class="fas fa-bars" ></i></button>
                    </div>
                
        
                <ul class="links">
        
                    <li>
                        <a href="#">Universal Banking Solution</a>
                    </li>
        
                    <li>
                        <a href="#">User_<?php echo $id?></a>
                    </li>

                    <li>
                        <a href="#"><i class="fa-solid fa-user-gear fa-lg"></i></a>
                        <ul class="dropdown-content">
                            <li><a href="#"  onclick="dis();">Profile</a></li>
                            <li><a href="#">Change Password</a></li>
                            <li><a href="../html/home.php">Logout</a></li>
                        </ul>
                    </li>

    
                    <li>
                        <a href="../html/home.php" target="_self"><i class="fa-solid fa-right-from-bracket fa-lg"></i></a>
                    </li>
    
                </ul>
        
               
            </div>
        </nav>
     </header>

     <div class="main-container">
        <div class="first-container">
            <section class="first-section">
                <h3>Transaction Maintenance</h3>
            </section>
            <section class="second-section">
                <div class="box1"><h4>Transaction ID:</h4></div>
                <div class="box2"><h4 style="font-weight: 50;"><?php
                $rnum = rand(10000, 99999); echo $rnum;
                ?></div>
                <div class="box3"><h4>Transaction Type:</h4></div>
                <div class="box4"><h4 style="font-weight: 50;">C/NR</h4></div>
            </section>
        </div>


        <!-- form for transcation -->

        <form action="cashieroperation.php?id=<?php echo $rnum;?>" method="POST">
        <div class="second-container">
                <section class="second-outer">
                    <section class="second-inner">
                        <div class="box21"><h2>Transaction Status: Entered</h2></div>
                        <div class="box22">
                            <div class="box221"><h3>A/C No:</h3></div>
                            <div class="box222"><input type="number" name="accno" style="margin-left: 252px;"></div>
                        </div>
                        <div class="box23">
                            <div class="box22">
                                <div class="box221"><h3>Amount:</h3></div>
                                <div class="box222"><input type="number"  name="amount" style="margin-left: 229px;"></div>
                            </div>
                        </div>
                        <div class="box24">
                            <div class="box22">
                                <div class="box221"><h3>Value Date:</h3></div>
                                <div class="box222"><input type="date" id="date" name="date" value="<?php echo date('Y-m-d')?>" disabled></div>
                            </div>
                        </div>
                        <div class="box25">
                            <div class="box22">
                                <div class="box221"><h3>Transaction Particulars:</h3></div>
                                <div class="input-field2">
                                    <select name="tran">
                                        <option disabled selected>Select type</option>
                                        <option value="cashdeposit">Cash Deposit</option>
                                        <option value="cashwithdrawl">Cash Withdrawl</option>
                                    </select>    
                                </div> 
                            </div>
                        </div>
                        <div class="box26">
                            <div class="box22">
                                <div class="box221"><h3>Remarks:</h3></div>
                                <div class="box222"><input type="text" name="rem" style="margin-left:216px;"></div>
                            </div>
                        </div>
                        <div class="box27"></div>
                        <!-- <div class="box28">
                            <div class="box281">
                                <h4>A/C Status:</h4>
                            </div>
                            <div class="box282">
                                <h4> </h4>
                            </div>
                            <div class="box283">
                            <h4>Available Balance:</h4> 
                            </div>
                            <div class="box284">
                            <h4></h4> 
                            </div>
                        </div> -->
                    </section>
                </section>
            </div>
            <div class="third-container">
                    <button class="button" name="validate">Validate</button>
                    <button class="button" name="refresh">Refresh</button>
            </div>
        </div>
        </form>

        <!-- profile card -->
        <div class="m-container" id="myPopup">
        <img src="../images/cross.png" class="close" width="20px">
        <div class="content-container">
            <div class="boxA">

            </div>
            <div class="img-container">
                <img src="../images/cashier.jpg" class="im"alt="">
            </div>
            <div class="boxB">
                <div class="boxB1">
                    <div class="boxB11">
                        <h4>Name:</h4>
                    </div>
                    <div class="boxB12">
                        <h4><?php echo $fname?> <?php echo $lname?></h4>
                    </div>
                </div>
                <div class="boxB2">
                    <div class="boxB21">
                        <h4>Employee ID:</h4>
                    </div>
                    <div class="boxB22">
                        <h4><?php echo $id?></h4>
                    </div>
                </div>
                <div class="boxB3">
                    <div class="boxB31">
                        <h4>Employee Post:</h4>
                    </div>
                    <div class="boxB32">
                        <h4><?php echo $level?></h4>
                    </div>
                </div>
                <div class="boxB4">
                    <div class="boxB41">
                        <h4>Contact:</h4>
                    </div>
                    <div class="boxB42">
                        <h4><?php echo $mobileno?></h4>
                    </div>
                </div>
            </div>
            <div class="boxC">
                <div class="iconc">
                    <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
     </div>
     <script>
                document.querySelector(".close").addEventListener("click", function(){
                    document.querySelector(".m-container").style.display = "none";
                    document.querySelector("body").style.overflow="auto";
                    location.reload();
                })
     </script>

     <!-- password change 
    <div class="popup-container">
    <img src="../images/cross.png" class="close1" width="20px">
    <form id="updatepass">
        <div class="form-group">
        <label for="old-password">Old Password:</label>
        <input type="password" id="old-password" required>
        </div>
        <div class="form-group">
        <label for="new-password">New Password:</label>
        <input type="password" id="new-password" name="npass" required>
        </div>
        <div class="form-group">
        <label for="confirm-password">Confirm New Password:</label>
        <input type="password" id="confirm-password" required>
        </div>
        <button type="submit" id="updatepass" onclick="update()">Change Password</button>
    </form>
    </div>
    <script>
                document.querySelector(".close1").addEventListener("click", function(){
                    document.querySelector(".popup-container").style.display = "none";
                    document.querySelector("body").style.overflow="auto";
                    location.reload();
                })

     </script> -->

    
</body>
</html>