<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width = device-width, initial-scale = 1"> 
    <title>CS3380</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<style>

    .jumbotron{
        background-color: dodgerblue;
        color: white;
    }
    
    .tab-content{
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
        padding: 10px;
    }
    
    .nav-tabs {
        margin-bottom: 0;
    }
    
    .img-fluid{
        width: 100%;
    }
    
    .header{
        font-style: bold;
    }
    
    .borderTime{
        border-top: 10px solid dodgerblue;
        border-left: 10px solid dodgerblue;
        border-right: 10px solid red;
        border-bottom: 10px solid red;
        border-radius: 10px;
        
    }
</style>
    
</head>

<body>

    <div class="container">
        <div class="page-header text-center">
        <h1 class="header">Blues vs Hawks Statistics Page</h1>
        </div>
        <!--<img src="http://covermyfb.com/media/covers/thumb/8412-saint-louis-blues.jpg" class="img-fluid" alt="Responsive Image">-->
        <div class="borderTime">
        <img src="https://orig00.deviantart.net/b907/f/2014/109/d/c/2014_nhl_playoffs_rd_1_blues_vs__blackhawks_by_epoole88-d7f2zx3.jpg" class="img-fluid borderTime">
        </div>
        <div class="jumbotron">
        
            <h2 class="text-center">Welcome to our Site Developed for CS3380</h2>
            <h4 class="text-center">Developers:</h4>
            <h5 class="text-center" style="color: black;">Sahand Sadri, Daniel Weiss, Kevin Hunkins, Zachary Pierucci</h5>
            <h5 class="text-center" style="color: black;">Mitchell Hoffmann, Daniel Clubb, Quinn Rydland, Hayden Harrill</h5>
            
        <!--<p> HOyl asdjkfakb a dfiakshdf asdfham,  adskfna  asdkfna d aksdbfka dskf akjsdbnfasdlmf a,sd fkjabsdkf lamsd flkansdlkf lmasd flasdfln</p>
        
        <p>
            <a href="#" class="btn btn-default btn-lg" role="button">More Info</a>
            <button type="submit" class="btn btn-danger" role="button">Button</button>
            <input type="button" value="Info" class="btn btn-info">
            
            <button type="submit" class="btn-primary btn-sm">Primary</button>
            <button type="submit" class="btn btn-success btn-xs">Success</button>
            <button type="submit" class="btn btn-warning btn-lg">Warning</button>
            <button type="submit" class="btn btn-link btn-lg">Link</button>
            
            <button type="button" class="btn btn-lg btn-primary" disabled="disabled">Primary</button>
            <a href="#" class="btn btn-default btn-lg disabled" role="button">Link</a>
            
            <div class="btn-group btn-group-lg" role="group">
                <button type="button" class="btn btn-default">Small</button>
                <button type="button" class="btn btn-default">Medium</button>
                <button type="button" class="btn btn-default">Large</button>
            </div>
            
        </p> -->
        </div>
        
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                <td class="text-center" colspan="14">Team Statistics</td>
                </tr>
            </thead>
        
            <tbody>
                <tr>
                    <th>Team</th>
                    <th>City</th>
                    <th>TeamCode</th>
                    <th>Games Played</th>
                    <th>Points</th>
                    <th>Wins</th>
                    <th>Losses</th>
                    <th>OTL</th>
                    <th>Division</th>
                    <th>Conferences</th>
                    <th>Stanley Cups</th>
                
                </tr>
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
#echo "<h1>Connected successfully</h1>";
$sql = "SELECT * FROM teams";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
echo "<td>" . $row['Team'] . "</td>" ;
echo "<td>" . $row['City'] . "</td>" ;
echo "<td>" . $row['TeamCode'] . "</td>" ;
echo "<td>" . $row['GamesPlayed'] . "</td>" ;
echo "<td>" . $row['Points'] . "</td>" ;
echo "<td>" . $row['Wins'] . "</td>" ;
echo "<td>" . $row['Losses'] . "</td>" ;
echo "<td>" . $row['OvertimeLosses'] . "</td>" ;
echo "<td>" . $row['Division'] . "</td>" ;
echo "<td>" . $row['Conferences'] . "</td>" ;        
echo "<td>" . $row['StanleyCups'] . "</td>" ;
echo "</tr>";

    }
} else {
    echo "<p>0 results</p>";
} //test
                

$conn->close();
?>
                
            </tbody>
        </table>
        
        <form action="" method="post">
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
            <td class="text-center" colspan="14">Blues Statistics</td>
            </tr>
            </thead>
            <tbody>
                <tr>
                
                    <th>Player</th>
                    <th>GP</th>
                    <th>G</th>
                    <th>A</th>
                    <th>PTS</th>
                    <th>+/-</th>
                    <th>PIM</th>
                    <th>PPG</th>
                    <th>PPP</th>
                    <th>SHG</th>
                    <th>SHP</th>
                    <th>GWG</th>
                    <th>OTG</th>
                    <th>SHOTS</th>
                    <th>Delete</th>
                </tr>
                
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
#echo "<h1>Connected successfully</h1>";
$sql = "SELECT * FROM stats WHERE Team = 'STL'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
echo "<td>" . $row['Name'] . "</td>" ;
echo "<td>" . $row['GP'] . "</td>" ;
echo "<td>" . $row['G'] . "</td>" ;
echo "<td>" . $row['A'] . "</td>" ;
echo "<td>" . $row['P'] . "</td>" ;
echo "<td>" . $row['PM'] . "</td>" ;
echo "<td>" . $row['PIM'] . "</td>" ;
echo "<td>" . $row['PPG'] . "</td>" ;
echo "<td>" . $row['PPP'] . "</td>" ;
echo "<td>" . $row['SHG'] . "</td>" ;        
echo "<td>" . $row['SHP'] . "</td>" ;
echo "<td>" . $row['GWG'] . "</td>" ;
echo "<td>" . $row['OTG'] . "</td>" ;
echo "<td>" . $row['Shots'] . "</td>" ;
echo '<td><input type="submit" name="deleteItem" value="'.$row['playerId'].'" /></td>"';
echo "</tr>";

    }
} else {
    echo "<p>0 results</p>";
} //test

if(isset($_POST['deleteItem']) and is_numeric($_POST['deleteItem']))
{
  // here comes your delete query: use $_POST['deleteItem'] as your id
   $delete = $_POST['deleteItem'];
   $sql1 = "DELETE FROM `stats` where `playerId` = '$delete'"; 
}

$conn->query($sql1); 
$conn->close();
sleep(2);
header("refresh:2; url=index.php");

?>
                
                
                
            
            </tbody>
        
        
        
        
        </table>
        </form>
        
        
        <form action="" method="post">
                <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
            <td class="text-center" colspan="14">Hawks Statistics</td>
            </tr>
            </thead>
            <tbody>
                <tr>
                
                    <th>Player</th>
                    <th>GP</th>
                    <th>G</th>
                    <th>A</th>
                    <th>PTS</th>
                    <th>+/-</th>
                    <th>PIM</th>
                    <th>PPG</th>
                    <th>PPP</th>
                    <th>SHG</th>
                    <th>SHP</th>
                    <th>GWG</th>
                    <th>OTG</th>
                    <th>SHOTS</th>
                    <th>Delete</th>
                </tr>
                
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
#echo "<h1>Connected successfully</h1>";
$sql = "SELECT * FROM stats WHERE Team = 'CHI'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
echo "<td>" . $row['Name'] . "</td>" ;
echo "<td>" . $row['GP'] . "</td>" ;
echo "<td>" . $row['G'] . "</td>" ;
echo "<td>" . $row['A'] . "</td>" ;
echo "<td>" . $row['P'] . "</td>" ;
echo "<td>" . $row['PM'] . "</td>" ;
echo "<td>" . $row['PIM'] . "</td>" ;
echo "<td>" . $row['PPG'] . "</td>" ;
echo "<td>" . $row['PPP'] . "</td>" ;
echo "<td>" . $row['SHG'] . "</td>" ;        
echo "<td>" . $row['SHP'] . "</td>" ;
echo "<td>" . $row['GWG'] . "</td>" ;
echo "<td>" . $row['OTG'] . "</td>" ;
echo "<td>" . $row['Shots'] . "</td>" ;
echo '<td><input type="submit" name="deleteItem" value="'.$row['playerId'].'" /></td>"';
echo "</tr>";

    }
} else {
    echo "<p>0 results</p>";
} //test
                

if(isset($_POST['deleteItem']) and is_numeric($_POST['deleteItem']))
{
  // here comes your delete query: use $_POST['deleteItem'] as your id
   $delete = $_POST['deleteItem'];
   $sql1 = "DELETE FROM `stats` where `playerId` = '$delete'"; 
}
                $conn->query($sql1); 
$conn->close();
header("refresh:2; url=index.php");
?>
                
                
                
            
            </tbody>
        
        
        
        
        </table>
        </form>
        
        <div class="container">
        <div class="border text-center" style="float: left; width: 50%">
            <h1>ADD A PLAYER</h1>
        <form action="insert.php" method="post" id="add">
            <div style="float: left; width: 50%">
            <h5>Name: </h5><input type="text" name="name">
                
            <h5>Team: </h5><input type="text" name="Team">
            
            <h5>GP: </h5><input type="text" name="GP">
            
            <h5>G: </h5><input type="text" name="G">
            
            <h5>A: </h5><input type="text" name="A">
            <br/>
            <h5>PTS: </h5><input type="text" name="PTS">
            
            <h5>+/-: </h5><input type="text" name="PM">
            
            <h5>PIM: </h5><input type="text" name="PIM">
            </div>
            
            <h5>PPG: </h5><input type="text" name="PPG">
            <br/>
            <div style="float: right; width: 50%">
            <h5>PPP: </h5><input type="text" name="PPP">
            <h5>SHP: </h5><input type="text" name="SHP">
            
            <h5>SHG: </h5><input type="text" name="SHG">
            
            <h5>GWG: </h5><input type="text" name="GWG">
            
            <h5>OTG: </h5><input type="text" name="OTG">
            
            <h5>SHOTS: </h5><input type="text" name="Shots">
            <br/>
                <div style="padding: 10px;">
                <button type="submit" form="add" value="Submit" class="btn-success" >Add Player</button>
                    </div>
            </div>
        </form>
        </div>
        
        <div class="border text-center" style="float: right; width: 50%">
            <h1>UPDATE A PLAYER</h1>
        <form action="update.php" method="POST" id="update">
            <div style="float: left; width: 50%">
            <h5>Name: </h5><input type="text" name="name">
                
            <h5>Team: </h5><input type="text" name="Team">
            
            <h5>GP: </h5><input type="text" name="GP">
            
            <h5>G: </h5><input type="text" name="G">
            
            <h5>A: </h5><input type="text" name="A">
            <br/>
            <h5>PTS: </h5><input type="text" name="PTS">
            
            <h5>+/-: </h5><input type="text" name="PM">
            
            <h5>PIM: </h5><input type="text" name="PIM">
            </div>
            
            <h5>PPG: </h5><input type="text" name="PPG">
            <br/>
            <div style="float: right; width: 50%">
            <h5>PPP: </h5><input type="text" name="PPP">
            <h5>SHP: </h5><input type="text" name="SHP">
            
            <h5>SHG: </h5><input type="text" name="SHG">
            
            <h5>GWG: </h5><input type="text" name="GWG">
            
            <h5>OTG: </h5><input type="text" name="OTG">
            
            <h5>SHOTS: </h5><input type="text" name="Shots">
            <br/>
                <div style="padding: 10px;">
                <button type="submit" form="update" value="Submit" class="btn-success" >Update Player</button>
                    </div>
            </div>
        </form>
        </div>
        </div>
    </div>
    
    
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

</body>


</html>
