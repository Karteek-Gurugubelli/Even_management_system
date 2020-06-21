<?php


$fname = filter_input(INPUT_POST,'name');
$lname = filter_input(INPUT_POST,'email');
$gender = filter_input(INPUT_POST,'phone');
$age = filter_input(INPUT_POST,'subject');
$study = filter_input(INPUT_POST,'message');

if(!empty($idname)){
	if (!empty($fname)){
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "org";
	$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
	if (mysqli_connect_error()){
	die('Connect Error('. mysqli_connect_error() .') '
     . mysqli_connect_error());
	}
	else{
	$sql = "INSERT INTO contact(name,email,phone,subject,message)
	value ('$name','$email','$phone','$subject','$message')";
	if ($conn->query($sql)){
	echo"new record is inserted successfully";
	}
	else{
	echo"Error: " . sql ."<br>". $conn->error;
	}
	$conn->close();
	}
}
}
?>