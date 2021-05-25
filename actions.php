<?php
    session_start();
    $login_status = false;
?>

<?php
require_once 'connection.php';

//collect data after submit button is clicked
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $usertype = $_POST['userType'];
    if($username == "" || $pass == ""){
        echo "<script>alert('Field must not be empty!!!')</script>";
    } else {
        if($usertype == 'admin'){
            $query = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$pass'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {
                if($row = mysqli_fetch_assoc($result)){
                    $db_password = $row['password'];
                    if($pass == $db_password){
                        $_SESSION['admin_name'] = $row['username'];
                        $login_status = true;
                        header("location:Admin/index.php");
                    } else {
                        echo "<script>alert('Incorrect Password!')</script>";
                    }
                    
                } else {
                    die(mysqli_error($conn));
                }
            } else {
                echo "<script>alert('Wrong Entries! Please check username and password again!')</script>";
            } 
        } elseif($usertype == 'partner') {
            $query = "SELECT * FROM `partners` WHERE `username` = '$username' AND `password` = '$pass' ";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {
                if($row = mysqli_fetch_array($result)) {           
                    $db_password = $row['password'];
                    if($pass == $db_password){
                        $_SESSION['partner_username'] = $username;
                        $_SESSION['partner_name'] = $row['name'];
                        $login_status = true;
                        header("location:partners/index.php");
                    } else {
                        echo "incorrect pass";
                    }
                } else {
                    die(mysqli_error($conn));
                }
            } else {
                echo "<script>alert('Wrong Entries! Please check username and password again!')</script>";
            }
        } else {

            $query = "SELECT * FROM `customer` WHERE `username` = '$username' AND `password` = '$pass' ";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {
                if($row = mysqli_fetch_array($result)) {           
                    $db_password = $row['password'];
                    if($pass == $db_password){
                        $_SESSION['customer_username'] = $username;
                        $login_status = true;
                        header("location:index.php");
                    } else {
                        echo "incorrect pass";
                    }
                } else {
                    die(mysqli_error($conn));
                }
            } else {
                echo "<script>alert('Wrong Entries! Please check username and password again!')</script>";
            }
        }
    }
}



?>