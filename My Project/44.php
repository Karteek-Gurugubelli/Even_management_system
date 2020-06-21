<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "event";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, email, phoneno, category, priority, priority1, priority2, message FROM error";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>E-mail</th><th>Phone No.</th><th>Category</th><th>priority</th><th>priority1</th><th>priority2</th><th>message</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["phoneno"]. "</td><td>" . $row["category"]. "</td><td>" . $row["priority"]. "</td><td>" . $row["priority1"]. "</td><td>" . $row["priority2"]. "</td><td>" . $row["message"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>