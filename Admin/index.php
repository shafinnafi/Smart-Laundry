<?php
    session_start();
?>  

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admins-index</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>     
    <nav class="navbar">
        <div class="brand-title">
            <a href="#">Smart Laundry</a>
        </div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Our Partners</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li>
                    <div class="login-signup-btn">
                        <span style="color: grey; margin-top: 7px">Welcome, <?php echo $_SESSION['admin_name']; ?> </span>
                        <button onclick="window.location.href = '/smartlaundry/lgt.php'">Logout</button>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container">
        <div id="marquees">
            <h1> <marquee behavior="sliding" direction="left">
                Welcome Admin!        
            </marquee></h1>
        </div>
    </div>
    <br>


    <section id="team">
        <div id="team1">
            <div class="conatiner my-3 py-5 text-center">
                <div class="row mb-5">
                    <div class="col">
                        <h1>Handle Orders</h1>
                        <br>
                        <br>
                        <br>
                        <p class="mt-3"></p>

                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/1.jpg" alt="" class="img-fluid riunded-circle w-50 mb-3">
                                <h3>Manage Orders</h3>
                                <p>Here you can view all the pending orders, manage all the orders & cancel the orders.</p>
                                <div id="button">
                                    <a href="manageorders.php">Manage</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/3.jpg" alt="" class="img-fluid riunded-circle w-50 mb-3">
                                <h3>Ongoing Orders</h3>
                                <p>Here you can see all the ongoing orders & update the order status also.</p>
                                <div id="button">
                                    <a href="ongoing.php">Ongoing Orders</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>

        </div>


        <div id="team2">
            <div class="conatiner my-3 py-5 text-center">
                <div class="row mb-5">
                    <div class="col">
                        <h1>Handle Partners</h1>
                        <br>
                        <br>
                        <br>
                        <p class="mt-3"></p>

                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/5.jpg" alt="" class="img-fluid riunded-circle w-50 mb-3">
                                <h3>Add Partners</h3>
                                <p>Here  you  can  add  service  providers &  provide  their  additional  informations.</p>
                                <div id="button">
                                    <a href="addpartners.php">Add</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/6.jpg" alt="" class="img-fluid riunded-circle w-50 mb-3">
                                <h3>Manage Partners</h3>
                                <p>Here you can view all the service providers, manage the service providers & services.</p>
                                <div id="button">
                                    <a href="partnerslist.php"> View</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
            
        </div>



        <div id="team3">
            <div class="conatiner my-3 py-5 text-center">
                <div class="row mb-5">
                    <div class="col">
                        <h1>Handle Customers</h1>
                        <br>
                        <br>
                        <br>
                        <p class="mt-3"></p>

                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/7.jpg" alt="" class="img-fluid riunded-circle w-50 mb-3">
                                <h3>View Customer</h3>
                                <p>Here  you  can  view  list  of  all  the  customers  &  their   given  information.</p>
                                <div id="button">
                                    <a href="customerlist.php">View</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/8.jpg" alt="" class="img-fluid riunded-circle w-50 mb-3">
                                <h3>Remove Customer</h3>
                                <p>Here you can remove any customers for not following the terms & conditions.</p>
                                <div id="button">
                                    <a href="dltcustomer.php">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
            
        </div>


    </section>

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

    <script src="index.js"></script>
    
</body>
</html>