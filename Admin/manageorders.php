<?php
    session_start();
    require_once 'connection.php';
    $query = "SELECT * FROM `orders`";
    $result = $conn->query($query) or die($conn->error);

    // removing orders
    if(isset($_GET['remove'])) {
        $id = $_GET['remove'];
        $conn->query("DELETE FROM `orders` WHERE `id` = '$id'") or die($conn->error);
        $_SESSION['message'] = "Data Deleted!";
        header('location: manageorders.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/partnerslist.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <title>Manage Orders</title>
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

<?php
    //alert after deleting data
	if (isset($_SESSION['message'])): ?>

	<div class="alert alert-danger">
    <?php 
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>
	</div>
<?php endif ?>

<div class="row justify-content-center">
            <div class="col-md-8">
                <h4 class="m-4 text-info text-center">Pending Orders</h4>
                <table class="table table-hover">
                <?php if(mysqli_num_rows($result) > 0): ?>
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Items</th>
                            <th>Order Details</th>
                            <th>Total Quantity</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <?php while($row = $result->fetch_assoc()): ?>
                    <tbody>
                        <tr>
                            <input type="hidden" value="<?php echo $row['id'] ?>">
                            <td><?php echo $row['customer_name'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['order_type'] ?></td>
                            <td><?php echo $row['total_qty'] ?></td>
                            <td><?php echo $row['total_price'] ?></td>
                            <td><a href="manageorders.php?remove=<?php echo $row['id'] ?>" class="btn btn-danger">Remove from list</a></td>
                        </tr>
                        <input type="hidden" value="<?php $total = $total+$row['total_price'] ?>">                                        
                    </tbody>
                    <?php endwhile ?>        
                </table>
                    <hr>
                    <?php else: ?>
                        <h4 class="text-danger text-center m-2">No orders to show!</h4>
                <?php endif; ?>
</body>
</html>