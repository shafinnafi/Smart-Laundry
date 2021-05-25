<?php 

$conn = mysqli_connect("localhost","root","","smart_laundry") or die("connection failed ");


if(isset($_POST['save'])){
    

    $partner_name = $_POST['name'];
   

    $check_partner = "select * from partners WHERE name='$partner_name'";
    $check= mysqli_query($conn,$check_partner) or die(mysqli_error($conn));

    if(mysqli_num_rows($check)>0)
    {
        echo "<script>alert('Partner already exist')</script>";
        echo"<script>window.open('addpartners.php','_self')</script>";
        exit();
    }


    $username = $_POST['uname'];
    $address = $_POST['address'];

    $logoFile = $_FILES['logo']["name"];
    $tmp_dir = $_FILES['logo']["tmp_name"];
    $logoSize = $_FILES['logo']["size"];

    $upload_dir = 'logo/';
    $logoExt = strtolower(pathinfo($logoFile,PATHINFO_EXTENSION)); 
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); 
    $logopic = rand(1000,1000000).".".$logoExt;

    $phone = $_POST['phone'];
    $password = $_POST['output'];


    if(in_array($logoExt, $valid_extensions)){			
		
				if($logoSize < 5000000)	{
					move_uploaded_file($tmp_dir,$upload_dir.$logopic);
					$savepartner="insert into partners (name,username,address,logo,phone,password) VALUES ('$partner_name','$username','$address','$logopic','$phone','$password')";
					mysqli_query($conn,$savepartner);
					echo "<script>alert('Data successfully saved!')</script>";
					echo "<script>window.open('index.php','_self')</script>";
				}
				else{
					
					 echo "<script>alert('Sorry, your file is too large.')</script>";				
                     echo "<script>window.open('addpartners.php','_self')</script>";
				}
			}
            else{		
                echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";				
                echo "<script>window.open('addpartners.php','_self')</script>";
            }

}



?>