<?php
    require_once('actions.php');
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartLaundry | Login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div id="body">
        <header> <a href="index.php" style="text-decoration: none; color: whitesmoke"> smart laundry </a> </header>
    </div>

    <br>
    <h2 style="text-align: center; color:grey; ">Welcome to Smart Laundry!</h2>
    <br> <br> 
    <h4 style="text-align:center; color:green;"> &nbsp; &nbsp; Please sign in to your profile to place an order</h4>
    
    <div class="bgcolor">

        <div class="bgimg" >
            <!--problem may cause here -->
            <div class="bar">
                <div class="input">
                    <form action="" method="POST">
                        <select name="userType" id="category">                    
                                <option value="admin">Admin</option>
                                <option value="partner">Service Provider</option>
                                <option value="customer">Customer</option>                       
                        </select>
                        <br>
                        <br>
                        <input class="text" name="username" type="text" placeholder="Username">
                        <br>
                        <br>
                        <input class="password" name="password" type="password" placeholder="Enter Password">
                        <br>
                        <br>
                        <button name="submit" type="submit" class="submit">Log In</button>
                        <a style="text-decoration: none; margin-left: 45px" href="signup.php">Don't have an account? Create one!</a>                 
                    </form> 
                </div>
            </div>
        </div>
    </div>

</body>

</html>