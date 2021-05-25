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
    <title>SmartLaundry | Our Services</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/our_services.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar">
        <div class="brand-title">
            <a href="index.php">Smart Laundry</a>
        </div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="our_services.php">Services</a></li>
                <li><a href="partners/partner.php">Our Partners</a></li>
                <li><a href="about_us/about_us.php">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li>
                    <!-- login/signup buttons -->
                    <?php if($login_status == true): ?>
                    <div class="login-signup-btn">
                        <span style="color: grey; margin-top:6px;">Welcome, <?php echo htmlspecialchars($name); ?> </span>
                        <button onclick="window.location.href = 'profile.php';">Profile</button>
                        <button onclick="window.location.href = 'lgt.php';">Log out</button>
                    </div>
                    <?php else: ?>
                    <div class="login-signup-btn">
                        <button onclick="window.location.href = 'login.php';">Login</button>
                        <button onclick="window.location.href = 'signup.php';">Sign Up</button>
                    </div>
                    <?php endif; ?>                    
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container">

        <section id="team">
            <div class="conatiner my-3 py-5 text-center">
                <div class="row mb-5">
                    <div class="col">
                        <h1>Why choose us?</h1>
                        <p>Why not stop worrying about dirty laundry and enjoy this extra free time while we provide you with:</p>

                    </div>
                </div>
            </div>



            <div class="row justify-content-md-center">


                <div class="col-lg-4 col-md-6">
                    <div class="card" style="border-color: white;">
                        <div class="card-body">
                            <img src="images/1o.png" alt="" class="img-fluid riunded-circle w-50 mb-3">
                            <h5>Free Pickup & Delivery</h5>
                            <p>Your laundry gets picked up and delivered back to your doorsteps for absolutely free. (Conditions apply)*</p>
                        </div>
                    </div>
                </div>  


                <div class="col-lg-4 col-md-6">
                    <div class="card" style="border-color: white;">
                        <div class="card-body">
                            <img src="images/2o.jpg" alt="" class="img-fluid riunded-circle w-50 mb-3">
                            <h5>Affordable</h5>
                            <p>No Additional Cost! You pay just as same as the price set by your selected laundry vendor.</p>
                        </div>
                    </div>
                </div>  


                <div class="col-lg-4 col-md-6">
                    <div class="card" style="border-color: white;">
                        <div class="card-body">
                            <img src="images/3o.jpg" alt="" class="img-fluid riunded-circle w-50 mb-3" >
                            <h5>Quality Assurance</h5>
                            <p>Best Quality Assurance by the Top-notch Laundry experts of the country.</p>
                        </div>
                    </div>
                </div>  

                <div class="col-lg-4 col-md-6">
                    <div class="card" style="border-color: white;">
                        <div class="card-body">
                            <img src="images/4o.jpg" alt="" class="img-fluid riunded-circle w-50 mb-3">
                            <h5>Convenience</h5>
                            <p>Your laundry gets done in just few clicks!</p>
                        </div>
                    </div>
                </div> 


                <div class="col-lg-4 col-md-6">
                    <div class="card" style="border-color: white;">
                        <div class="card-body">
                            <img src="images/5o.png" alt="" class="img-fluid riunded-circle w-50 mb-3">
                            <h5>Smart Community</h5>
                            <p>Lets build a better community together.</p>
                        </div>
                    </div>
                </div> 
            </div>

        </section>
    </div>
    <script src="js/index.js"></script>

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

</body>
</html>