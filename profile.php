<?php
    session_start();
    require_once 'connection.php';
    if(isset($_SESSION['customer_username'])) {
        $username = $_SESSION['customer_username'];
    }
    // $id = $fullname = $phone = $dob = $address = $email = $username = '';
    $result = $conn->query("SELECT * FROM `customer` WHERE `username` = '$username'") or die($conn->error);
    // getting user info from the database
    if($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $fullname =  $row['fullname'];
        $phone =  $row['phone'];
        $dob =  $row['dob'];
        $address =  $row['address'];
        $email =  $row['email'];
        $username =  $row['username'];
        $password =  $row['password'];
    }

    //to update user information
    if(isset($_POST['update'])) {
        $id = $_GET['update'];
        $fullname =  $_POST['name'];
        $phone =  $_POST['phone'];
        $dob =  $_POST['dob'];
        $address = $_POST['address'];
        $email =  $_POST['email'];
        $username =  $_POST['username'];
        $password =  $_POST['psw'];

        //to send new info to the database
        $conn->query(
            "UPDATE `customer` SET 
            `fullname`= '$fullname',
            `phone`= '$phone',
            `dob`= '$dob',
            `address`= '$address',
            `email`= '$email',
            `username`= '$username',
            `password`= '$password' WHERE `id` = '$id'") or die($conn->error);
        echo "<script>alert('Successfully updated!')</script>";
        
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylesheets/profile.css">
    <title>SmartLaundry | User Profile</title>
</head>

<body>
    <header onclick="window.location.href='index.php'" style="cursor: pointer">smart laundry</a></header>
    <div class="wrapper">
        <form action="profile.php?update=<?php echo $id; ?>" method=POST>
            <div class="container">
                <h1>Profile</h1>
                <p>Update your personal information.</p>
                <hr>

                <label for="name"><b>Full Name</b></label>
                <input type="text" placeholder="Full Name" name="name" value="<?php echo $fullname ?>">

                <label for="phone"><b>Phone</b></label>
                <input type="text" placeholder="Your Phone" name="phone" value="<?php echo $phone ?>">

                <label for="dob"><b>Date of Birth</b></label>
                <input type="date" placeholder="DOB" name="dob" value="<?php echo $dob ?>">

                <label for="address"><b>Address</b></label>
                <input type="text" placeholder="Address" name="address" value="<?php echo $address ?>">

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" value="<?php echo $email ?>">

                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="ID You'll Use To Log In" name="username" value="<?php echo $username ?>">

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" value="<?php echo $password ?>">

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password To Confirm" name="psw-repeat">
                <hr>

                <button type="submit" class="registerbtn" name='update'>Update</button>
            </div>
        </form>
        <div class="navigation">
            <button onclick="window.location.href = 'index.php'"> <i class="fa fa-user" style="background-color: #333333;"></i>Home</button>
            <button onclick="window.location.href = 'lgt.php'"> <i class="fa fa-sign-out" style="background-color: #333333;"></i> Logout</button>
        </div>
    </div>
</body>

</html>