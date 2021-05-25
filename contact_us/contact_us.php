<?php
    session_start();
    if(isset($_SESSION['customer_username'])){
        $login_status = true;
        $name = $_SESSION['customer_username'];
    } else {
        $login_status = false;
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartLaundry | Contact Us</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/contact_us.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
     .sidebar1{
            float: left;
            
            padding: 0 30px;
            box-sizing: border-box;
            margin-left: 480px;
        }

        .sidebar1 img{
           height: 60px;
           width: 60px;
        }

        .sidebar2{
            float: right;
            width: 60%;
            padding: 0 30px;
            box-sizing: border-box;
        }



    </style>
</head>
<body>
    <nav class="navbar">
        <div class="brand-title">
            <a href="../index.php">Smart Laundry</a>
        </div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../our_services.php">Services</a></li>
                <li><a href="../partners/partner.php">Our Partners</a></li>
                <li><a href="../about_us/about_us.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li>
                    <!-- login/signup buttons -->
                    <?php if($login_status == true): ?>
                    <div class="login-signup-btn">
                        <span style="color: grey; margin-top:6px;">Welcome, <?php echo htmlspecialchars($name); ?> </span>
                        <button onclick="window.location.href = '../profile.php';">Profile</button>
                        <button onclick="window.location.href = '../lgt.php';">Log out</button>
                    </div>
                    <?php else: ?>
                    <div class="login-signup-btn">
                        <button onclick="window.location.href = '../login.php';">Login</button>
                        <button onclick="window.location.href = '../signup.php';">Sign Up</button>
                    </div>
                    <?php endif; ?>                    
                </li>
            </ul>
        </div>

    </nav>

    <div class="container">
 
        <div class="content-txt">
            <h4>We are staffed 7 days/week and will respond to your inquiry as quickly as possible.</h4>
        </div>

        <div class="content-img">
            <img src="images/1.jpg" alt=""  height="1000px" width="1000px">
        </div>


        
        <div class="content-txt">
            <h3>Customer Care</h3>
            <p style="font-size: 20px">Not sure how to order login or how to order? <br>Try to reach us through phone & email. </p>
        </div>

    </div>

        <br>
        <br>
        

        <div class="conatiner">

            <div class="sidebar">
                <aside class="sidebar1">
                    <img src="images/2.png" alt="" >
                    
                </aside>
                <aside class="sidebar2">
                    <h6>Call Us:</h6>
                    <p>+8801686769808</p>
                </aside>
            </div>

            <br>
            <br>
            <br>
            <br>

            <div class="sidebar">
                <aside class="sidebar1">
                    <img src="images/3.png" alt="" >
                    
                </aside>
                <aside class="sidebar2">
                    <h6>Email Us:</h6>
                    <p>hello@smartlaundry.com</p>
                </aside>
            </div>

            <br>
            <br>
            <br>
            <br>

            <div class="sidebar">
                <aside class="sidebar1">
                    <img src="images/4.png" >
                    
                </aside>
                <aside class="sidebar2">
                    <h6>Address:</h6>
                    <p> AIUB,Kuratoli Road </p>
                </aside>
            </div>


            <br>
            <br>
            <br>
            <br>

        </div>

        
    </div>

    <script src="css/index.js"></script>
</body>

<footer>
    <div class="social-media">
        <p>Follow Us On</p>
    </div>

    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-instagram"></a>
    <a href="#" class="fa fa-youtube"></a>
    <p>Copyright&copy; 2020 smartlaundry.com. All rights reserved.</p>
</footer>


</html>