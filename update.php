<?php
if(isset($_POST['update'])){
    $playerId = $_POST['playerId'];
    $Name = $_POST['Name'];
    $GP = $_POST['GP'];
    $G = $_POST['G'];
    $A = $_POST['A'];
    $P = $_POST['P'];
    $PM = $_POST['PM'];
    $PIM = $_POST['PIM'];
    $PPG = $_POST['PPG'];
    $PPP = $_POST['PPP'];
    $SHG = $_POST['SHG'];
    $SHP = $_POST['SHP'];
    $GWG = $_POST['GWG'];
    $OTG = $_POST['OTG'];
    $Shots = $_POST['Shots'];
    
    $sql = mysql_query("UPDATE stats SET GP="$GP",G="$G",A="$A",P="$P",PM="$PM",PIM="$PIM",PPG="$PPG",PPP="$PPP",SHG="$SHG",SHP="$SHP",GWG="$GWG",OTG="$OTG",Shots="$Shots" WHERE playerId="$playerId"");
    
    $retrieval = mysql_query($sql, $conn);
    if(! $retrieval){
        die('Could not update data:' . mysql_error());
    }
    echo "Updated data successfully\n";
    


}