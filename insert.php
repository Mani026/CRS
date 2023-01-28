<?php
include 'conn.php'; 


// START CONTACT DETAILS FORM DATA CODE

if(isset($_POST['send_massage']))
{
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$message=$_POST['message'];	
	$date_time=date('d-m-Y H:i:s');
	$ip_address = $_SERVER['REMOTE_ADDR'];

	echo $q="INSERT INTO contact (first_name,last_name,email,mobile,message,date_time,ip_address) VALUES ('$first_name','$last_name','$email','$mobile','$message','$date_time','$ip_address')";

	$result=mysqli_query($conn,$q);
	
	if(!$result)	
	{
		echo "record not inserted";
	}
	header('Location:contact.php');
}


// START SUBSCRIBER DATA CODE

if(isset($_POST['subscribe']))
{
	$email=$_POST['email'];	
	$date_time=date('d-m-Y H:i:s');
	$ip_address = $_SERVER['REMOTE_ADDR'];

	echo $q="INSERT INTO subscribe (email,date_time,ip_address) VALUES ('$email','$date_time','$ip_address')";

	$result=mysqli_query($conn,$q);
	
	if(!$result)	
	{
		echo "record not inserted";
	}
	header('Location:contact.php');
}

// START SEO DATA CODE

if(isset($_POST['click']))
{
	$email=$_POST['email'];	
	$date_time=date('d-m-Y H:i:s');
	$ip_address = $_SERVER['REMOTE_ADDR'];

	echo $q="INSERT INTO subscribe (email,date_time,ip_address) VALUES ('$email','$date_time','$ip_address')";

	$result=mysqli_query($conn,$q);
	
	if(!$result)	
	{
		echo "record not inserted";
	}
	header('Location:contact.php');
}

// START SEO FORM DATA CODE

if(isset($_POST['seo_form']))
{

	$first_name=$_POST['first_name'];

	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile_no'];
	$purpose=$_POST['purpose'];	

	// $q="INSERT INTO seo_form (first_name,last_name,email,mobile_no,purpose) VALUES ('$first_name','$last_name','$email','$mobile','$purpose')";
   $q= "INSERT INTO `seo_form`( `first_name`, `last_name`, `email`, `mobile_no`, `purpose`) VALUES ('$first_name','$last_name','$email','$mobile','$purpose')";
	$result=mysqli_query($conn,$q);
	
	if(!$result)	
	{
		echo "record not inserted";
	}
	header('Location:seo.php');
}


// START DEVELOPMENT FORM DATA CODE

if(isset($_POST['development_form']))
{

	$first_name=$_POST['first_name'];

	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$development=$_POST['development'];	
	$message=$_POST['message'];

   $q= "INSERT INTO `development_form`( `first_name`, `last_name`, `email`, `mobile_no`, `development`, `short_description`) VALUES ('$first_name','$last_name','$email','$mobile','$development','$message')";
	$result=mysqli_query($conn,$q);
	
	if(!$result)	
	{
		echo "record not inserted";
	}
	header('Location:development.php');
}


// START TRAINING FORM DATA CODE

if(isset($_POST['training_form']))
{

	$name=$_POST['name'];	
	$email=$_POST['email'];
	$mobile=$_POST['mobile_no'];
	$address=$_POST['address'];	
    $courses=$_POST['courses'];
	$occupation=$_POST['occupation'];
	$message=$_POST['message'];

	$q= "INSERT INTO `training_form`( `full_name`, `email`, `mobile_no`, `address`, `courses`, `occupation`, `message`) VALUES ('$name','$email','$mobile','$address','$courses','$occupation','$message')";
	$result=mysqli_query($conn,$q);
	
	if(!$result)	
	{
		echo "record not inserted";
	}

	header('Location:training.php');
}


?>