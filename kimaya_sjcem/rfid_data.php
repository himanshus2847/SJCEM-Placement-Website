<?php
  
  $url='localhost';
  $username='root';
  $password='';
  $dbname = "smart_card";
  
$mysqli = new mysqli($url, $username, $password, $dbname);
  
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT rfid_data FROM admin_data";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["rfid_data"];
    }
} 
else {
    echo "0 results";
}
$mysqli->close(); 
?>