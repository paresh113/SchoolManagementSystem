<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

ob_start();
session_start();
$current_file = $_SERVER ['SCRIPT_NAME'];
if (isset ($_SERVER ['HTTP_REFERER']) && !empty ($_SERVER ['HTTP_REFERER'])) {
    $http_referer = $_SERVER ['HTTP_REFERER'];
}
function loggedin () {
    if (isset ($_SESSION ['user_id']) && !empty($_SESSION ['user_id'])) {
        return true;
    }
    else {
        return false;
    }
}

function getuserfield ($field) {
    $query = "SELECT `$field` FROM `teacher`
              WHERE `id` = '".$_SESSION ['user_id']."'";
    if ($query_run = mysql_query ($query)) {
        if ($query_result = mysql_result ($query_run, 0, $field)) {
            return $query_result;
        }
    }
}

?>