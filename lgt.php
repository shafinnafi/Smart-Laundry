<?php
    require_once 'actions.php';
    // if(isset($_SESSION['admin_name'])) {
    //     unset($_SESSION['admin_name']);
    //     echo "<script>window.open('index.php', '_self')</script>";
    // }

    // if(isset($_SESSION['customer_name'])) {
    //     unset($_SESSION['customer_name']);
    //     header('location: index.php');
    // }
    session_destroy();
    header('location: index.php');
    
?>