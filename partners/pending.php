<?php
        session_start();
        if(isset($_SESSION['partner_username'])){
            // $login_status = true;
            $name = $_SESSION['partner_username'];
        }
        $partnerName = $_SESSION['partner_name'];
?>

<?php
    require_once '../connection.php';
    $query = "SELECT * FROM `orders` WHERE `shop_name` = '$partnerName'";
    $result = $conn->query($query) or die($conn->error);
    if(isset($_GET['action'])) {
        $id = $_GET['id'];
        if($_GET['action'] == 'delete') {
            $conn->query("DELETE FROM `orders` WHERE `id` = '$id'") or die($conn->error);
            $_SESSION['message'] = "Item Cleared";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Ongoing Orders</title>

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

        #main-header {
            border: 2px black solid;
            padding: 25px;
            background-color: #333;
        }
        #main-header h2 {
        font-size: 1.5vw;
        }

        #htext {
            display: inline;
            letter-spacing: 20px;
            text-decoration: none;
            cursor: pointer;
            color: black;
        }
    </style>
</head>
<body>
    <header id="main-header"> 
        <div class="container">
        
            <a id="htext" href="index.php">
                <h2 style="color: whitesmoke;">SMART LAUNDRY</h2>
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
    <?php if(isset($_SESSION['message'])): ?>
    <div class="alert alert-danger">
        <h6 class="text-center"><?php echo $_SESSION['message']; ?></h6>
        <?php unset($_SESSION['message']); ?>
    </div>
    <?php endif ?>

    <br><br><br>


    <div class="container">
        <div class="row justify-content-center">
            <h2 class="text-info">Pending Deliveries</h2>
            <?php if(mysqli_num_rows($result) > 0) { ?>
            <table class="table table-hover">
                <thead>
                    <th>Customer Name</th>
                    <th>Item Name</th>
                    <th>Order Details</th>
                    <th>Total Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </thead>
                <tbody>
                <?php while( $row = $result->fetch_assoc()): ?>
                    <tr>
                    <td> <?php echo $row['customer_name']; ?> </td>
                    <td> <?php echo $row['name']; ?> </td>
                    <td> <?php echo $row['order_type']; ?> </td>
                    <td> <?php echo $row['total_qty']; ?> </td>
                    <td> <?php echo $row['total_price']; ?> </td>
                    <td><a href="pending.php?action=delete&id=<?php echo $row["id"]; ?>"><span class="btn btn-danger">Deploy</span></a></td>
                    </tr>
                <?php endwhile ?>
                </tbody>
            </table>
            <?php } ?>
        </div>
        <hr>
        <?php if(mysqli_num_rows($result) == 0) { ?>
                <h6 class="text-center text-danger">No pending orders to show</h6>
        <?php } ?>
    </div>
</body>
</html>