<?php
    session_start();
    if(isset($_SESSION['partner_username'])){
        // $login_status = true;
        $name = $_SESSION['partner_username'];
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner | Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <style>
        .login-signup-btn button {
            margin: 5px;
            border: 1px solid black;
            font-size: 15px;
            text-align: center;
            padding: 5px 10px;
            border-radius: 5%;
            background-color: rgb(201, 201, 201);
            border: 1px solid black;
        }

        .login-signup-btn button:hover {
            background-color: #333;
            border: 1px solid white;
            color: rgba(255, 255, 255, 0.856);
            cursor: pointer;
            transition: .5s;
        }
    </style>
</head>
<body>

    <header id="main-header"> 
        <div class="container">
            <a id="htext" href="index.php">
                <h2 style="color: whitesmoke;">SMART LAUNDRY</h2>
                <!-- <img src="images/logo.jpg" alt="can't load" > -->
            </a>
            <?php if(isset($_SESSION['partner_username'])): ?>
            <div class="login-signup-btn">
                <span style="color: grey; margin-top:6px; font-size: 20px">Welcome, <?php echo htmlspecialchars($name); ?> </span>
                <!-- <button onclick="window.location.href = 'profile.html';">Profile</button> -->
                <button onclick="window.location.href = '../lgt.php';">Log out</button>
            </div>
            <?php endif; ?>            
        </div>
    </header> 


    <section id="team">
        <div class="conatiner my-3 py-5 text-center">
            <div class="row mb-5">
                <div class="col">
                    <h1>MANAGE SERVICES</h1>
                    <p class="mt-3"></p>

                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/1.jpg" alt="" class="img-fluid riunded-circle w-50 mb-3">
                            <h3>View Services</h3>
                            <p>List of the services that you provide with their information</p>
                            <div id="button">
                                <a href="servicelist.php"> View All</a>
                            </div>
                        </div>
                    </div>
                </div>


                <br>
                <br>


                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/2.jpg" alt="" class="img-fluid riunded-circle w-50 mb-3">
                            <h3>Ongoing Orders</h3>
                            <p>Review ongoing orders and update status if delivered</p>
                            <div id="button">
                                <a href="pending.php">Go</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    
</body>
</html>