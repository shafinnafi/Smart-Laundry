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
    <title>SmartLaundry | Partners</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/partner.css">
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
                <li><a href="partner.php">Our Partners</a></li>
                <li><a href="../about_us/about_us.php">About Us</a></li>
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

    <br>
    <br>
    <br>


    <section id="team">
        <div class="conatiner my-3 py-5 text-center">
            <div class="row mb-5">
                <div class="col">
                    <h1>Our Partners</h1>
                    <p class="mt-3"></p>

                </div>
            </div>

            
            <div class="row justify-content-md-center">
                




                <?php 
                    $conn = mysqli_connect("localhost","root","","smart_laundry") or die("connection failed "); 
                    $query =  "select * from partners";
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    while($row = $result->fetch_assoc()){
                ?>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">                       
                            <img src="../Admin/logo/<?php echo $row['logo']; ?>" alt="" class="img-fluid riunded-circle w-50 mb-3" style="height: 150px; width: 150px" >
                            <!-- <h3>Mohammady Dry Cleaners</h3>
                            <p>From here you can manage the services by adding, deleting & updating the services information</p> -->
                            <div id="button">
                                <a href="<?php if($login_status == true){ echo "../orderlist.php?shop=".$row['name'] ;} else { echo "../login.php";} ?>"> Order</a>
                            </div>
                        </div>
                    </div>
                </div>

                    <?php }?>


            </div>
        </div>
    </section>
    <script>
        // js for navbar
        const toggleButton = document.getElementsByClassName('toggle-button')[0]
        const navbarLinks = document.getElementsByClassName('navbar-links')[0]

        toggleButton.addEventListener('click', () => {
            navbarLinks.classList.toggle('active')
        })
    </script>
</body>

</html>