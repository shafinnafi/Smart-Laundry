<?php
    session_start();
    if(isset($_SESSION['partner_username'])){
        // $login_status = true;
        $name = $_SESSION['partner_username'];
    }
    require_once '../connection.php';
    $result = $conn->query("SELECT * FROM `product`") or die($conn->error);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner-index</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
    <br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="text-center text-info">List Of Your Services</h3>
            <br><br><br><br>
            <table class="table table-hover">
                <thead>
                    <th>Item Name</th>
                    <th>Order Type</th>
                    <th>Price</th>
                </thead>
            <?php while($row = $result->fetch_assoc()): ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['order_type'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                    </tr>
                </tbody>
            <?php endwhile ?>
            </table>
        </div>
    </div>
</body>
</html>