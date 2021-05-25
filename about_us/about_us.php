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
    <title>SmartLaundry | About us</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/about_us.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
     #sidebar1{
            float: left;
            width: 50%;
            padding: 0 30px;
            box-sizing: border-box;
        }

        #sidebar2{
            float: right;
            width: 50%;
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
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="#">Contact</a></li>
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
    <div class="conatiner">
        <div class="content">
            <div class="content-txt">
                <h4 style="font-size: 1.5rem; align-text: center">We wanted an easy way to get laundry done. We couldn’t find one. So we built one!</h4>
            </div>

            <div class="content-img">
                <img src="images/2.jpg" alt="" style="height: auto; width: 100%">
            </div>

            <div class="content-txt">
                <p>We are a group of super-enthusiastic people who wanted to make other people’s lives easier by providing them with some extra time; the time they would spend sorting and doing their laundry. We believe there is more to one’s life than spending time after doing laundry and so we provide you with the first online laundry platform in Bangladesh. With our Website, Mobile Application or Hotline number, you can choose which laundry service provider you want to connect with and schedule a pickup and delivery with us. With that extra load off your shoulder, you can now sit back, relax and enjoy the free time; if we can add even a little extra free time to your busy schedule, we would believe we are doing a good job.</p>
            </div>

        </div>
    </div>


    <div class="conatiner">
        <aside id="sidebar1">
            <h4>Mission</h4>
            <p>The Company strives to make people’s lives easier and convenient with our utmost service. We exist to provide our valued customer with the convenience of doing laundry with a click. Our success is measured by how passionately they promote us to others.</p>
        </aside>

        <aside id="sidebar2">
            <h4>Vision</h4>
            <p>With our great courage, integrity, hard work and love create better solution to make everyday life easier and enjoyable.</p>
        </aside>
    </div>

    <div class="conatiner">
        <section id="team">
            <div class="conatainer my-3 py-5 text center">
                <div class="row mb-5">
                    <div class="col">
                        <h1>The SmartFounders of SmartLaundry</h1>
                        <p>We wanted an easy way to get laundry done. We couldn't find one. So we built one.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="images/5.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3" >
                                <div class="justify-content-center">
                                    <h3>Shafin Ahmed</h3>
                                    <h5>American International University Bangladesh</h5>
                                </div>
                                <div class="d-flex flex-row justify-content-center">
                                    <div class="p-4">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="p-4">
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                    <div class="p-4">
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="images/6.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3" >
                                <div class="justify-content-center">
                                    <h3>Sazzad Hossain</h3>
                                    <h5>American International University Bangladesh</h5>
                                </div>
                                <div class="d-flex flex-row justify-content-center">
                                    <div class="p-4">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="p-4">
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                    <div class="p-4">
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="images/8.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3" >
                                <div class="justify-content-center">
                                    <h3>Wares Bin Sayef</h3>
                                    <h5>American International University Bangladesh</h5>
                                </div>
                                <div class="d-flex flex-row justify-content-center">
                                    <div class="p-4">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="p-4">
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                    <div class="p-4">
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="images/10.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3" >
                                <div class="justify-content-center">
                                    <h3>H.M.Ammar</h3>
                                    <h5>American International University Bangladesh</h5>
                                </div>
                                <div class="d-flex flex-row justify-content-center">
                                    <div class="p-4">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="p-4">
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                    <div class="p-4">
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </section>
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