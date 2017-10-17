<?php
$servername = "localhost";
$username = "thengboz";
$password = "cst336";
$dbname = "tech_devices_app"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



// make a query 
  
$sql = "SELECT id, name, college FROM Department";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "department id: ".$row["id"] . ", name: ".$row["name"]. ", college: ".$row["college"]."<br>";
    }
} else {
    echo "0 results";
}

$conn -> close();
?>