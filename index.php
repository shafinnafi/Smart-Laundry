<?php
    session_start();
    if(isset($_SESSION['customer_username'])){
        $login_status = true;
        $name = $_SESSION['customer_username'];
    } else {
        $login_status = false;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheets/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SmartLaundry | Home</title>
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
                <li><a href="contact_us/contact_us.php">Contact</a></li>
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
    <!-- main section -->

    <section class="intro">
        <div class="intro-text">
            <h2>Welcome to Smart Laundry!</h2>
            <p>Smart Laundry; the first online laundry platform in Bangladesh. It has partnered up with the top laundry experts of the country and provides you with a FREE pick-up and delivery for your dirty laundry.</p>
        </div>
    </section>
    </div>

    <div id="content-wrapper">
        <!-- about us -->
        <div class="about">
            <h4>What's Smart Laundry?</h4>
            <p>Smart Laundry provides you the luxury of not having to do the laundry yourself, as we come straight to your doorstep. With our Website or Hotline, you can schedule an order, choose the pick-up and delivery times, choose your preferred laundry
                vendor and we'll do the rest.</p>
        </div>
        <!-- slider -->
        <section class="slider1">
            <div class="slidercontainer">
                <div class="showSlide fade">
                    <img src="images/11.jpg" />
                    <div class="slider-text">Looking for a better laundry solution?</div>
                </div>
                <div class="showSlide fade">
                    <img src="images/32.jpg" />
                    <div class="slider-text-left">Got messed up with your dirty garments?</div>
                </div>

                <div class="showSlide fade">
                    <img src="images/22.jpg" />
                    <div class="slider-text-left">Check out our services, you'd love to let us handle it!</div>
                </div>
                <!-- Navigation arrows -->
                <a class="left" onclick="nextSlide(-1)">❮</a>
                <a class="right" onclick="nextSlide(1)">❯</a>
            </div>
        </section>

        <!-- how it works  -->
        <section class="how-it-works">
            <div class="heading">
                <p>How It Works</p>
            </div>
            <div class="cards">
                <div class="select">
                    <img src="images/select.jpg" alt="select">
                    <h6>Choose</h6>
                    <p>Select from a list of laundry experts of the town!</p>
                </div>
                <div class="schedule">
                    <img src="images/schedule.jpg" alt="select">
                    <h6>Schedule</h6>
                    <p>Request pickup now or Schedule a convenient pickup time later!</p>
                </div>
                <div class="pickup">
                    <img src="images/pickup.jpg" alt="select">
                    <h6>Pick Up</h6>
                    <p>Our Team will come to your address to pick up your laundry on time!</p>
                </div>
                <div class="delivery">
                    <img src="images/delivery.jpg" alt="select">
                    <h6>Delivery</h6>
                    <p>We bring back your clean laundry to you!</p>
                </div>
            </div>
        </section>
    </div>
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
    <script src="javascript/index.js"></script>
</body>

</html>