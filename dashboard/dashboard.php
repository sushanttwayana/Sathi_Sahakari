<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard</title>
  <link rel="stylesheet" type="text/css" href="dashboard.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <!-- favicon  -->
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../favicon_io/site.webmanifest">
  
  <script>
   
    function myFunction2 () {
        location.replace("form.php");
    };
 
</script>
  <style>
        #u{
            padding: 10px 35px 10px 30px;
            background-color: #006600;
            border: 1px #006600 solid;
            border-radius: 10px;
            color: white;
            margin-bottom: 10px;
            width: 120px;
        }
        #uu{
            padding: 10px 35px 10px 30px;
            background-color: #003566;
            border: 1px #003566 solid;
            border-radius: 10px;
            color: white;
            margin-bottom: 10px;
            width: 120px;
        }

        #d{
            padding: 10px 35px 10px 40px;
            background-color: red;
            border: 1px red solid;
            border-radius: 10px;
            color: white;
            width: 120px;
        }

  </style>
</head>
<body>
  <div class="container" id="section1">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="admin.png">
          <span class="nav-item">Admin</span>
        </a></li>
        <li><a href="#section1">
          <i class="fa fa-folder-open"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="#section2">
          <i class="fa-solid fa-user-secret"></i> 
          <span class="nav-item">Manage Customer</span>
        </a></li>
        <li><a href="#section3">
          <i class="fa-solid fa-users"></i> 
           <span class="nav-item">Manage Cashier</span>
        </a></li>
        <li><a href="#section4">
          <i class="fa fa-credit-card-alt"></i>
          <span class="nav-item">Form Pending</span>
        </a></li>
        

        <li><a href="../html/home.php" class="logout">
          <i class="fa fa-sign-out"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1>Founders</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
        <div class="card">
          <img src="../images/admins/admin11.png">
          <h4>Anjan Prajapati</h4>
          <p>Founder</p>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="../images/admins/admin12.png">
          <h4>Dipen Shrestha</h4>
          <p>Founder</p>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="../images/admins/admin9.png">
          <h4>Samesh Bajracharya</h4>
          <p>Founder</p>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="../images/admins/admin13.png">
          <h4>Sushant Twayana</h4>
          <p>Founder</p>
          <button>Profile</button>
        </div>
      </div>

      <section class="teachers" id ="section2">
        <div class="teachers-list">
          <h1>Customer List</h1>
          <table class="table">
            <thead>
              <tr>
                <th>Account No</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Customize</th>
              </tr>
            </thead>
           
            <tbody>

            <!-- update & reject customer info -->
            <?php

              $host="localhost";
              $user="root";
              $password="";
              $database="sathisahakari";
              $con = mysqli_connect($host,$user,$password,$database);

              if(!$con){
                  die('Could not Connect My Sql:');
              }
              $sql = "SELECT * FROM customertable";

              $result = mysqli_query($con,$sql);

              if($result){
                while($row = mysqli_fetch_assoc($result)){
                  $accno = $row['accno'];
                  $cfn = $row['cfn'];
                  $cmn = $row['cmn'];
                  $cln = $row['cln'];
                  $mob = $row['mob'];
                  $email = $row['email'];
                  ?>

                  <tr>
                  <td><?php echo $accno  ?></td>
                  <td><?php echo $cfn ?></td>
                  <td><?php echo $cmn ?></td>
                  <td><?php echo $cln ?></td>
                  <td><?php echo $mob  ?></td>
                  <td><?php echo $email  ?></td>
                  <td>
                  <a href="editcustomer.php?accno=<?php echo $accno ?>"><input type="button" value="Update" id="u" class="edit"></a>
                  <a href="deletecustomer.php?accno=<?php echo $accno?>"><input type="button" value="Delete" id="d"></a>
                  </td>
                  </tr>
                  <?php

                }
              }
              ?>
              </tbody>
          </table>
        </div>
      </section>

      <!-- Cashier section -->
      
      <section class="teachers" id="section3">
        <div class="teachers-list">
          <h1> Cashier List</h1>
          <table class="table">
            <thead>
              <tr>
                <th>Employee ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Phone Number</th>
                <th>Level</th>
                <th colspan="2"> <button  onclick = "myFunction2()" >ADD +</button></th>
              </tr>
            </thead>
  
            <tbody>
                <!-- update & delete cashier info-->
            <?php

              $host="localhost";
              $user="root";
              $password="";
              $database="sathisahakari";
              $con = mysqli_connect($host,$user,$password,$database);

              if(!$con){
                  die('Could not Connect My Sql:');
              }
              $sql = "SELECT * FROM cashiertable";

              $result = mysqli_query($con,$sql);

              if($result){
                while($row = mysqli_fetch_assoc($result)){
                  $id = $row['empid'];
                  $fname = $row['firstname'];
                  $lname = $row['lastname'];
                  $mobileno = $row['mobileno'];
                  $level = $row['level'];
              ?>

              <tr>
              <td><?php echo $id  ?></td>
              <td><?php echo $fname ?></td>
              <td><?php echo $lname  ?></td>
              <td><?php echo $mobileno ?></td>
              <td><?php echo $level  ?></td>
              <td>
              <a href="editcashier.php?id=<?php echo $id ?>"><input type="button" value="Update" id="u" class="edit"></a>
              <a href="deletecashier.php?id=<?php echo $id ?>"><input type="button" value="Delete" id="d"></a>
              </td>
              </tr>
              <?php

                }
              }
              ?>
              </tbody>

          </table>
        </div>
      </section>
      <section class="teachers" id="section4">
        <div class="teachers-list">
          <h1> Pending Forms</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th colspan="2">Customize</th>
              </tr>
            </thead>
            <tbody>

            <!-- update & reject customer info -->
            <?php

              $host="localhost";
              $user="root";
              $password="";
              $database="sathisahakari";
              $con = mysqli_connect($host,$user,$password,$database);

              if(!$con){
                  die('Could not Connect My Sql:');
              }
              $sql = "SELECT * FROM customertabletemp";

              $result = mysqli_query($con,$sql);

              if($result){
                while($row = mysqli_fetch_assoc($result)){
                  $id = $row['id'];
                  $cfn = $row['cfn'];
                  $cmn = $row['cmn'];
                  $cln = $row['cln'];
                  $mob = $row['mob'];
                  $email = $row['email'];
                  ?>

                  <tr>
                  <td><?php echo $id  ?></td>
                  <td><?php echo $cfn ?></td>
                  <td><?php echo $cmn ?></td>
                  <td><?php echo $cln ?></td>
                  <td><?php echo $mob  ?></td>
                  <td><?php echo $email  ?></td>
                  <td>
                  <a href="edittempcustomer.php?id=<?php echo $id ?>"><input type="button" value="Validate" id="u" class="edit"></a>
                  <a href="deletetempcustomer.php?id=<?php echo $id?>"><input type="button" value="Reject" id="d"></a>
                  </td>
                  </tr>
                  <?php

                }
              }
              ?>
              </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>

</body>
</html>
