<?php

error_reporting(0);

session_start();
$id=0;
$update=false;
$fullname="";
$phone="";
$dob="";
$address="";
$email="";
$username="";
$password="";
  



$mysqli=new mysqli("localhost","root","","smart_laundry") or die(mysqli_error($mysqli));

// if(isset($_POST['save'])){

//   $fullname=$_POST['fullname'];
//   $phone=$_POST['phone'];
//   $dob=$_POST['dob'];
//   $address=$_POST['address'];
//   $email=$_POST['email'];
//   $username=$_POST['username'];
//   $password=$_POST['password'];
  


// $mysqli->query("insert into customer (fullname,phone,dob,address,email,username,password) values ('$fullname','$phone','$dob','$address','$email','$username',
//   '$password')")
//  or die($mysqli->error);

// $_SESSION ['message']="Record has been saved";
// $_SESSION['msg_type']="success";
//  header("location:manage.php");



// }


//For delete


  if(isset($_GET['delete']))

     {
     	$id=$_GET['delete'];

     	$mysqli-> query("delete from customer where id=$id") or die($mysqli-error());

     	$_SESSION ['message']="Record has been Deleted";
      $_SESSION['msg_type']="danger";
        header("location:customerlist.php");


     }


   if(isset($_GET['edit']))

     {

    $id=$_GET['edit'];
    $update=true;
    $result= $mysqli->query("select* from customer where id =$id") or die($mysqli-error());
    if(count($result==1))

       {

  $row= $result->fetch_array();

  $fullname=$row['fullname'];
  $phone=$row['phone'];
  $dob=$row['dob'];
  $address=$row['address'];
  $email=$row['email'];
  $username=$row['username'];
  $password=$row['password'];
  
       }


     }

     if(isset($_POST['update'])){

  $fullname=$_POST['fullname'];
  $phone=$_POST['phone'];
  $dob=$_POST['dob'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $id=$_POST['id'];
  
     $mysqli->query("UPDATE `customer` SET `fullname`='$fullname',`phone`='$phone',`dob`='$dob',`address`='$address',`email`='$email',`username`='$username',`password`='$password' WHERE  id=$id") or die($mysqli->error());

     $_SESSION['message'] ="Record updated";
     $_SESSION['msg_type'] ="warning";
     header("location:manage.php");



     }


 ?>