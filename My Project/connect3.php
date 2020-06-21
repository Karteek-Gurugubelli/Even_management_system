<?php

$fname = filter_input(INPUT_POST,'fname');
$mname = filter_input(INPUT_POST,'mname');
$lname = filter_input(INPUT_POST,'lname');
$phoneno = filter_input(INPUT_POST,'phoneno');
$email = filter_input(INPUT_POST,'email');
$address = filter_input(INPUT_POST,'address');
$pincode = filter_input(INPUT_POST,'pincode');
$date = filter_input(INPUT_POST,'date');
$time = filter_input(INPUT_POST,'time');
$category = filter_input(INPUT_POST,'category');
$people = filter_input(INPUT_POST,'people');
if(!empty($fname)){
	if (!empty($lname)){
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "event";
	$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
	if (mysqli_connect_error()){
	die('Connect Error('. mysqli_connect_error() .') '
     . mysqli_connect_error());
	}
	else{
	$sql = "INSERT INTO wedding(fname,mname,lname,phoneno,email,address,pincode,date,time,
category,people)
	value ('$fname','$mname','$lname','$phoneno','$email','$address','$pincode','$date'
,'$time','$category','$people')";
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