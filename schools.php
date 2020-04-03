<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "air-quality-analyzer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sch_id, sch_name, sch_long, sch_lat FROM schools";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "School id: " . $row["sch_id"]. " - Name: " . $row["sch_name"]. " - Long: " . $row["sch_long"]. " Lat: " . $row["sch_lat"]." <br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
