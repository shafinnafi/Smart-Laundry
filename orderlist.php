<?php
    session_start();
    if(isset($_SESSION['customer_username'])){
        $login_status = true;
        $customerUsername = $_SESSION['customer_username'];
    } else {
        $login_status = false;
    }
    $total = 0;
    $shopName = $_GET['shop'];
?>

<?php
    require_once 'connection.php';

    if(isset($_POST["add"])) {
        if(isset($_SESSION["mycart"]))
        {
            $item_array_id = array_column($_SESSION["mycart"], "item_id");
            if(!in_array($_GET["id"], $item_array_id))
            {
                $count = count($_SESSION["mycart"]);
                $item_array = array(
                    'item_id'			=>	$_GET["id"],
                    'item_name'			=>	$_POST["hidden-name"],
                    'item_price'		=>	$_POST["hidden-price"],
                    'item_quantity'		=>	$_POST["quantity"],
                    'item_type'         => $_POST["hidden-type"],
                    'item_total'        => ($_POST["quantity"]*$_POST["hidden-price"])
                );
                $_SESSION["mycart"][$count] = $item_array;
            }
            else
            {
                echo '<script>alert("Item Already Added")</script>';
            }
        }
        else
        {
            $item_array = array(
                'item_id'			=>	$_GET["id"],
                'item_name'			=>	$_POST["hidden-name"],
                'item_price'		=>	$_POST["hidden-price"],
                'item_quantity'		=>	$_POST["quantity"],
                'item_type'         => $_POST["hidden-type"],
                'item_total'        => ($_POST["quantity"]*$_POST["hidden-price"])
            );
            $_SESSION["mycart"][0] = $item_array;
            // print_r($_SESSION["mycart"][0]);
        }
    }


    if(isset($_GET["action"]))
    {
        if($_GET["action"] == "delete")
        {
            foreach($_SESSION["mycart"] as $keys => $values)
            {
                if($values["item_id"] == $_GET["id"])
                {
                    unset($_SESSION["mycart"][$keys]);
                    echo '<script>alert("Item Removed")</script>';
                    // echo '<script>window.location="orderlist.php"</script>';
                }
            }
        }
        error_reporting(0); //if the user comes back to this page after confirming, there will be some minor warnings and this will ignore those warnings and notices
        // sending all the orders to the database when confirm button is clicked
        if(($_GET['action']) == 'confirm') {
            //$grandTotal = $_POST['grand-total'];
            foreach($_SESSION['mycart'] as $keys => $values) {
                $itemName = $values['item_name'];
                $orderType = $values['item_type'];
                $totalPrice = $values['item_total'];
                $totalQty = $values['item_quantity'];
                
                $sql = "INSERT INTO `orders`(`customer_name`, `name`, `order_type`, `total_price`, `total_qty`, `shop_name`) VALUES ('$customerUsername', '$itemName', '$orderType', '$totalPrice', '$totalQty', '$shopName')";
                $conn->query($sql) or die($conn->error);
            }
            echo '<script>alert("Your order has been placed!")</script>';
            unset($_SESSION['mycart']);
        }
    }

    
?>

<?php
    //getting rows from product table
    $result = $conn->query("SELECT * FROM `product`") or die($conn->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Place Order</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="stylesheets/index.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<!-- navbar -->

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
                <li><a href="partners/partner.php">Our Partners</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li>
                    <!-- login/signup buttons -->
                    <?php if($login_status == true): ?>
                    <div class="login-signup-btn">
                        <span style="color: grey; margin-top:6px;">Welcome, <?php echo htmlspecialchars($customerUsername); ?> </span>
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
<br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="m-4 text-info">Select your item</h2>       
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Item Type</th>
                            <th>Quantity</th>
                            <th>Order Details</th>
                            <th>Price/Piece</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php if(mysqli_num_rows($result) > 0): ?>
                        <?php while($row = $result->fetch_assoc()): ?>
                        <form action="orderlist.php?shop=<?php echo $shopName ?>&action=add&id=<?php echo $row['id'] ?>" method="POST">
                            <tbody>                      
                                <tr>
                                    <input name="hidden-name" type="hidden" value="<?php echo $row['name'] ?>">
                                    <td><?php echo $row['name'] ?></td>
                                    <td><input name="quantity" type="number" value="1"></td>
                                    <td>
                                        <?php echo $row['order_type'] ?>
                                        <input name="hidden-type" type="hidden" value="<?php echo $row['order_type'] ?>">
                                    </td>
                                    <td><?php echo $row['price'] ?></td>
                                    <input type="hidden" name="hidden-price" value="<?php echo $row['price'] ?>">
                                    <td>
                                    <input type="submit" name="add" style="margin-top:5px;" class="btn btn-info" value="Add to Cart" />
                                    </td>
                                </tr>                        
                            </tbody>
                        </form>
                        <?php endwhile; ?>  
                    <?php endif; ?>  
                </table>
            </div>
        </div>

    <!-- shopping cart if there is any item to show -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4 class="m-4 text-danger text-center">Your Cart</h4>
                <?php if(!empty($_SESSION['mycart'])) { ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Items</th>
                            <th>Order Details</th>
                            <th>Total Quantity</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($_SESSION['mycart'] as $keys => $values) { ?>
                        <tr>
                            <td><?php echo $values["item_name"]; ?></td>
                            <td><?php echo $values["item_type"]; ?></td>
                            <td><?php echo $values["item_quantity"]; ?></td>
                            <td><?php echo $values["item_total"]; ?></td>
                            <td><a href="orderlist.php?shop=<?php echo $shopName ?>&action=delete&id=<?php echo $values["item_id"]; ?>"><span class="btn btn-danger">Remove</span></a></td>

                            <?php $total = $total + $values['item_total'] ?>
                        </tr>
                    <?php } ?>
                    </tbody>                
                </table>

                    <hr>
                        <h5>Total Payable Tk. <?php echo $total; ?></h5>
                        <input type="hidden" name="grand-total" value="<?php echo $total; ?>">
                    <hr>                
                    <a href="orderlist.php?shop=<?php echo $shopName?>&total=<?php echo $total ?>&action=confirm"  style="text-decoration: none"><span class="btn btn-success btn-block m-2 p-2">Confirm Order</span></a>
                
                <hr>
                    <h6 class="text-center text-danger">You cannot cancel once you confirm your order!</h6>
                <hr>
                <br><br>
                <?php } ?>
                <?php if($total == 0) { ?>
                    <h4 class="text-danger text-center m-2">You haven't selected an item yet!</h4>
                <?php } ?>
            </div>
        </div>
        
        
    </div>

    <script src="js/index.js"></script>
</body>
</html>
