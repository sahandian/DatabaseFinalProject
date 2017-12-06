<?php




$servername = "bluesstatistics3380.cvkr0vitka5o.us-east-1.rds.amazonaws.com:3306";
$username = "cs3380";
$password = "blues3380";
$dbname = "BluesStatistics3380";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<h1>Connected successfully</h1>";
$sql = "SELECT * FROM St.louis blues";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p>id: " . $row["Name"] . "</p>";
    }
} else {
    echo "<p>0 results</p>";
} //test
$conn->close();
?>
 