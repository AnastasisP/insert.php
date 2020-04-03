<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "air-quality-analyzer";

// Create connection
$conn = new mysqli($servername, $username, $password , $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT SCH_ID, SCH_NAME,SCH_LONG,SCH_LAT FROM schools ";
$result = $conn->query($sql);

if($result->num_rows > 0 ) {
    //output data of each row
    while($row = $result->fetch_assoc()){
        echo  "hi" .$row["SCH_ID"] .$row["SCH_NAME"] .$row["SCH_LONG"] .$row["SCH_LAT"] ."<br>";}
}else{
    echo "0 results"; }
$conn->close();
?>