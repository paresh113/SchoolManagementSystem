<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        require 'core.inc.php';
        require 'connect.inc.php';
        
        if (loggedin()) {
            /*$firstname = getuserfield('Name');
            echo 'You are logged in, '.$firstname.' <a href = "logout.php"> Log out </a>';
            */
            header('Location: loggedin.php');
             
        }
        else {
            include 'loginform.inc.php';
        }
        ?>
    </body>
</html>
