<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="form.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">



</head>
<body>
    <?php

    include 'db.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM cashiertable WHERE empid = $id "; // Employee_ID  = ".$id;

    $result = mysqli_query($conn, $sql);

    if($result){

        while($row = mysqli_fetch_assoc($result)){
            $id = $row['empid'];
            $fname = $row['firstname'];
            $lname = $row['lastname'];
            $mobileno = $row['mobileno'];
            $level = $row['level'];
        }
    }
    ?>
    
    <div class="container">
        <header>Cashier's Registration</header>

        <form action="updatecashier.php" method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" name="fname" placeholder="Enter your first name" value=" <?php global $fname; echo $fname ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text"  name="lname" placeholder="Enter your last name" value=" <?php global $lname; echo $lname ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="text"  name="no" placeholder="Enter mobile number" min="9000000000" max="9999999999"  value=" <?php global $mobileno; echo $mobileno ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Employee_ID</label>
                            <input type="text"  name="e_id" placeholder="Enter the ID" value=" <?php global $id; echo $id ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Level</label>
                            <input type="text"  name="level" placeholder="Enter the level" value=" <?php global $level; echo $level ?>" required>
                        </div>
                    </div>
                </div>
                       
                        <button class="sumbit" name="submit">
                            <span class="btnText">UPDATE</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>


</body>
</html>
