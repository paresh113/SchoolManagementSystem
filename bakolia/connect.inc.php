<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$conn_error = 'Could not connect';
            $mysql_host = 'localhost';
            $mysql_user = 'root';
            $mysql_pass = '';
            $mysql_db = 'school management system';
            
            if (!@mysql_connect ($mysql_host, $mysql_user, $mysql_pass) || 
                    !@mysql_select_db ($mysql_db)) {
                    die ($conn_error);
            }
        ?>