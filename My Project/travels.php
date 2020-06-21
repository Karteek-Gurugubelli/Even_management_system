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

$sql = "SELECT fname, mname, lname, phoneno, email, address, pincode, date, time, category1, source, destination, people FROM travels";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table><tr><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Phone No.</th><th>E-mail</th><th>Address</th><th>Pin Code</th><th>Date</th><th>Time</th><th>Selected Car</th><th>Source</th><th>Destination</th><th>No. Of People</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["fname"]. "</td><td>" . $row["mname"]. "</td><td>" . $row["lname"]. "</td><td>" . $row["phoneno"]. "</td><td>" . $row["email"]. "</td><td>" . $row["address"]. "</td><td>" . $row["pincode"]. "</td><td>" . $row["date"]. "</td><td>" . $row["time"]. "</td><td>" . $row["category1"]. "</td><td>" . $row["source"]. "</td><td>" . $row["destination"]. "</td><td>" . $row["people"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 