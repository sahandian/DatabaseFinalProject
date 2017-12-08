<form action="" method="post">

echo '<td><input type="submit" name="deleteItem" value="'.$row['playerId'].'" /></td>"';

    
    
<?php

if(isset($_POST['deleteItem']) and is_numeric($_POST['deleteItem']))
{
  // here comes your delete query: use $_POST['deleteItem'] as your id
   $delete = $_POST['deleteItem']
   $sql = "DELETE FROM `stats` where `playerId` = '$delete'"; 


}