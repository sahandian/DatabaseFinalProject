<?php

$servername = "sql302.epizy.com";
$username = "epiz_21190636";
$password = "password";
$dbname = "epiz_21190636_stats";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id = "0";
$name =  $_POST['name'];
$team= $_POST['Team'];
$GP =  $_POST['GP'];
$G =  $_POST['G'];
$A =  $_POST['A'];
$P =  $_POST['PTS'];
$plus =  $_POST['PM'];
$PIM =  $_POST['PIM'];
$PPG =  $_POST['PPG'];
$PPP =  $_POST['PPP'];
$SHG =  $_POST['SHG'];
$SHP =  $_POST['SHP'];
$GWG =  $_POST['GWG'];
$OTG =  $_POST['OTG'];
$Shots =  $_POST['Shots'];

$sql = "INSERT INTO stats (Name,Team,GP,G,A,P,PM,PIM,PPG,PPP,SHG,SHP,GWG,OTG,Shots) VALUES ('$name','$team', '$GP','$G','$A','$P','$plus','$PIM','$PPG','$PPP','$SHG','$SHP','$GWG','$OTG','$Shots') ";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("refresh:2; url=index.php");

?>
