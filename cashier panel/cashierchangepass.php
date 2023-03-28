<?php
session_start();
?>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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

button[type="submit"] {
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
#close-button {
  position: absolute;
  top: 205px;
  right: 630px;
  border: none;
  background-color: transparent;
  color: #FFFFFF;
  font-size: 18px;
  cursor: pointer;
  width: 20px;
  height: 20px;
  text-align: center;
  line-height: 20px;
}



</style>
</head>
<body>
<div class="popup-container">
  <form>
    <button type="button" id="close-button">&times;</button>
    <div class="form-group">
      <label for="old-password">Old Password:</label>
      <input type="password" id="old-password" required>
    </div>
    <div class="form-group">
      <label for="new-password">New Password:</label>
      <input type="password" id="new-password" required>
    </div>
    <div class="form-group">
      <label for="confirm-password">Confirm New Password:</label>
      <input type="password" id="confirm-password" required>
    </div>
    <button type="submit">Change Password</button>
  </form>
</div>
<!-- <script>
      document.getElementById("change-password-link").addEventListener("click", function(event) {
    event.preventDefault();
    document.querySelector(".popup-container").style.visibility = "visible";
}); -->

<script>
document.getElementById("close-button").addEventListener("click", function() {
    // document.querySelector(".popup-container").style.visibility = "hidden";
    window.location.href = 'cashierdashboard.php';
});
document.querySelector("form").addEventListener("submit", function(event) {
    event.preventDefault();
    var opass = <?php echo $pass;?>
    var oldPassword = document.getElementById("old-password").value;
    var newPassword = document.getElementById("new-password").value;
    var confirmPassword = document.getElementById("confirm-password").value;
    if(opass!=oldPassword){
        window.location.href = 'cashierdashboard.php';
    }
    if (newPassword !== confirmPassword) {
        alert("New password and confirm password do not match!");
        return;
    }
    
    var hasUppercase = /[A-Z]/.test(newPassword);
    var hasLowercase = /[a-z]/.test(newPassword);
    var hasNumber = /\d/.test(newPassword);
    var hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/.test(newPassword);
    
    if (newPassword.length < 8) {
        alert("Password must be at least 8 characters long!");
    } else if (!hasUppercase || !hasLowercase) {
        alert("Password must contain at least one uppercase and one lowercase letter!");
    } else if (!hasNumber) {
        alert("Password must contain at least one number!");
    } else if (!hasSpecialChar) {
        alert("Password must contain at least one special character!");
    } else {
        alert("Password updated successfully!");
    }
});


</script>
</body>
</html>