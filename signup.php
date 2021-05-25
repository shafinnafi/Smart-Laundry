
<?php

include("connection.php");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $repeatPassword = $_POST['psw-repeat'];
    $dbusername = $conn->query("SELECT username from customer where username = '$username'") or die($conn->error);
    if($row = $dbusername->fetch_assoc()){
        if($username == $row['username']) {
            echo "<script>alert('This Username has already been taken! Please try another username')</script>";
        }
    }  else {
        $query = "INSERT INTO `customer`(`fullname`, `phone`, `dob`, `address`, `email`, `username`, `password`) VALUES ('$name','$phone','$dob','$address','$email','$username','$password')";
        $result = $conn->query($query) or die ($conn->error);
        if($result) {
            echo "<script> alert('Account created successfully! Please sign in to your profile using the username')</script>";
            echo "<script>window.open('login.php', '_self')</script>";
        } else {
            echo "<script> alert('Cant create account!')</script>";
        }
    }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="stylesheets/signup.css">
	
    
    <title>Sign Up</title>
</head>

<body>
    <header onclick="window.location.href='index.php'" style="cursor: pointer">smart laundry</header>
    <form onsubmit="return validation()" method="POST">
        <div class="container">
            <h1>Register on Smart Laundry Today!</h1>
            <p>Please fill in this form to create an account. (For Users Only!)</p>
            <hr>

            <label for="name"><b>Full Name</b></label>
            <input type="text" placeholder="Full Name" name="name" id="user">
            <p id="username" class="text-danger font-weight-bold"> </p>

            <label for="phone"><b>Phone</b></label>
            <input type="text" placeholder="Phone Number" name="phone" id="mobileNumber">
            <p id="mobileno" class="text-danger font-weight-bold"> </p>

            <label for="dob"><b>Date of Birth</b></label>
            <input type="date" placeholder="DOB" name="dob">

            <label for="address"><b>Address</b></label>
            <input type="text" placeholder="Address" name="address">

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Email ID" name="email" id="emails">
            <p id="emailids" class="text-danger font-weight-bold"> </p>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Set a Username" name="username" id="userId">
            <p id="useridalert" class="text-danger font-weight-bold"> </p>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Set a Password" name="password" id="pass">
            <p id="passwords" class="text-danger font-weight-bold"> </p>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password To Confirm" name="psw-repeat" id="conpass">
            <p id="confrmpass" class="text-danger font-weight-bold"> </p>
            <hr>

            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <button type="submit" name="submit" class="registerbtn">Create Account</button>
        </div>
        <div class="container signin">
            <p>Already have an account? <a href="login.php">Sign in</a>.</p>
        </div>
    </form>

<script type="text/javascript" src="javascript/signup.js"></script>
</body>

</html>


