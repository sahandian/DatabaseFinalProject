<?php




$servername = "sql212.epizy.com";
$username = "epiz_20708161";
$password = "TFyNhU4q03";
$dbname = "epiz_20708161_BluesStatistics";
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
 