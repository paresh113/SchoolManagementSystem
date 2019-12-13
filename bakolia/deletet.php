<?php
ob_start();
    include 'connect.inc.php';
   echo  $id = $_GET['id'];
    $result=mysql_query("DELETE from student WHERE ID='$id'") or die("error");
    if($result)
    {
        header("Location: Student Info.php");
        
    }
 else {
     echo'Deletion Failed';
        
}
?>