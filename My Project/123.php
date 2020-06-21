<?php

$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email');
$phoneno = filter_input(INPUT_POST,'phoneno');
$category = filter_input(INPUT_POST,'category');
$priority = filter_input(INPUT_POST,'priority');
$priority1 = filter_input(INPUT_POST,'priority1');
$priority2 = filter_input(INPUT_POST,'priority2');



$message = filter_input(INPUT_POST,'message');

if(!empty($name)){
	if (!empty($email)){
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
	$sql = "INSERT INTO error(name,email,phoneno,category,priority,priority1,priority2,message)
	value ('$name','$email','$phoneno','$category','$priority','$priority1','$priority2','message')";
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