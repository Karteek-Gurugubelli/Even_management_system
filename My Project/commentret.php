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

$sql = "SELECT name, email, message FROM comments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table><tr><th>Name</th><th>Mail Id</th><th>Comment</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["message"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 