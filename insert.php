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
//insert command for "sch_id"
if (isset($_GET["sch_id"])){
    $sch_id=$_GET["sch_id"];
    echo $sch_id . "</p>";
}
//insert command for "sch_name"
if (isset($_GET["sch_name"])){
    $sch_name=$_GET["sch_name"];
    echo $sch_name . "</p>";
}
//insert command for "sch_long"
if (isset($_GET["sch_long"])){
    $sch_long=$_GET["sch_id"];
    echo $sch_long . "</p>";
}
//insert command for "sch_lat"
if (isset($_GET["sch_lat"])){
    $sch_lat=$_GET["sch_lat"];
    echo $sch_lat . "</p>";
}
$sql = "SELECT sch_id, sch_name, sch_long, sch_lat FROM schools WHERE sch_id LIKE `$sch_id` AND sch_name LIKE `$sch_name` AND sch_long LIKE `$sch_long` AND sch_lat LIKE `$sch_lat` ";
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
