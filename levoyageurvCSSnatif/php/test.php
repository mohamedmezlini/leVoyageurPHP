<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "isamm1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, snippet FROM phone";
$result = $conn->query($sql);




if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>snippet</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td> ".$row["snippet"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

