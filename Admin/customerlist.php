<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/partnerslist.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <title>Customer List</title>


</head>
<body>
<nav class="navbar">
        <div class="brand-title">
            <a style="text-decoration: none" href="index.php">Smart Laundry</a>
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

	<?php require_once 'customer_actions.php'; ?>
<br><br><br>

<div class="container">
<h2 class="text-center text-info">List of Customers on Smart Laundry</h2>


  <?php $mysqli=new mysqli("localhost","root","","smart_laundry") or die(mysqli_error($mysqli));

    $result= $mysqli-> query("select * from customer") or die ($mysqli->error);

  ?>



  <div class="row justify-content-center">
  	
   <table class="table">

   	<thead>
   		<tr>
        <th>Name</th>
        <th>Phone</th>
        <th>DOB</th>
        <th>Address</th>
        <th>Email</th>
        <th>Username</th>
   		</tr>
   	</thead>

   	<?php 
   	while ($row=$result ->fetch_assoc()): ?>
   		
   <tr>
   	<td>  <?php echo $row['fullname'] ; ?> </td>
   <td>  <?php echo $row['phone'] ; ?> </td>
   <td>  <?php echo $row['dob'] ; ?> </td>
   <td>  <?php echo $row['address'] ; ?> </td>
   <td>  <?php echo $row['email'] ; ?> </td>
   <td>  <?php echo $row['username'] ; ?> </td>
   </tr>
  <?php endwhile; ?>

   	

</table>

</div>

    <?php
    function pre_r($array)
        {
    	echo "<pre>";
    	print_r($array);
    	echo "</pre>";
        } 
     ?>





</body>





</html>
