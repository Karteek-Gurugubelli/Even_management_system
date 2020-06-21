<!DOCTYPE html>
<html>
<head>
<?php include('1.php');?>
<style>
table, th, td {
    border: 1px solid black;
}
heading {
    align: center; 
}
</style>

</head>

<body>
<?php include('2.php');?>

<div class="heading">
<h2> Cattering Clients</h2>
</div>
<?php include('retrive.php');?>

<div class="heading">
<h2> Rice Items:</h2>
</div>
<?php include('retrive6.php');?><div class="heading">
<h2>Non-Veg Curries:</h2>
</div>
<?php include('retrive7.php');?><div class="heading">
<h2> Veg Curries</h2>
</div>
<?php include('retrive8.php');?><div class="heading">
<h2> Fry curries:</h2>
</div>
<?php include('retrive9.php');?><div class="heading">
<h2> Sweets:</h2>
</div>
<?php include('retrive10.php');?>
</body>
</html>