<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheets/index.css">
    <title></title>
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
                <li><a href="partners.php">Our Partners</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li>
                    <!-- login/signup buttons -->
                    <div class="login-signup-btn">
                        <?php if($login_status == true): ?>
                        <li class="grey-text">Hello,
                            <?php echo htmlspecialchars($name); ?> </li>
                        <button onclick="window.location.href = 'profile.html';">Profile</button>
                        <button onclick="window.location.href = 'lgt.php';">Log out</button>
                        <?php else: ?>
                        <button onclick="window.location.href = 'login.php';">Login</button>
                        <button onclick="window.location.href = 'signup.php';">Sign Up</button>
                        <?php endif; ?>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <script src="js/index.js"></script>
</body>

</html>