<!DOCTYPE html>
<html lang="en">
<head>
<title>Bakolia High School</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
 
  margin: 0;
}

.header {
    background-color:skyblue;
    padding: 30px;
    text-align: center;
font-size: 30px;

}
div.animation {
    width: 100px;
    height: 100px;
    background-color: red;
    position: relative;
    animation-name: example;
   
}


div.pic
    {
background-image: url(cute-school-children-vector.jpg);
height: 300px;
width:1400px;

}

.topnav {
    overflow: hidden;
    background-color:navy;
}


.column {

    float: left;
    padding: 10px;

}


.column.side {
    width: 25%;
}

.column.middle {
    width: 50%;
}
.color
    {background-color: silver;
height:320px;}


.row:after {
    content: "";
    display: table;
    clear: both;
}

@media (max-width: 600px) {
    .column.side, .column.middle {
        width: 100%;
    }
}

.footer {
    background-color:midnightblue;
    padding: 10px;
    text-align: center;
color: azure;
 
}
.right{
    position: absolute;
    right: 30px;
 padding: 10px;
top:3px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color:midnightblue;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: silver;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
color:white;
background-color:midnightblue;
}

.dropdown:hover .dropdown-content {
    display: block;
}



a:hover, a:active {
    background-color:green;
}

div.tabledesign
{
    background-color:lightblue;
}


</style>
</head>
<body>

<div class="header">
  <h2>BAKOLIA HIGH SCHOOL</h2>
  <p>Education for Humanization</p>
<form action="logout.php">
<div class="header right" style="font-size: 20px">
  
  <div class="" style="font-size: 20px">
  
      <a style="" href = "logout.php"><button style="background-color:green;padding: 10px;color: white">Log Out</button></a>
</div>
</div>
</form> 

</div>

<div class="pic">

</div>

<div class="topnav">

<ul>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Students</a>
    <div class="dropdown-content">
        <a href="Student Info.php">Informations</a>
        <a href="Student Entry.php">New Student Entry</a>

        <a href="Fees Query.php">Fees Query</a></div><li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Teachers</a>
    <div class="dropdown-content">
        <a href="Teacher Info.php">Informations</a>
        <a href="Teacher Entry.php">New Teacher Entry</a>
     

<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Class</a>
    <div class="dropdown-content">
        <a href="Class.php">Class Room</a>
        <a href="Teachers_class.php">Class Teachers</a>
        </div>
        </li></div>

    <div class='tabledesign'>
<?php
    include 'connect.inc.php';
    //global $fetch;
    $room=mysql_query("SELECT * FROM class order by Location") or die("error");
    echo '<table style="width:80%;">';
    echo '<th align="left">Class ID</th><th align="left">Location</th><th align="left" >';
    if($room)
    {
        while ($cls= mysql_fetch_assoc($room))
        {
            echo '<tr><td>'.$cls['Class_ID'].'</td>'
               . '<td>'.$cls['Location'].'</td>';
            
        }
        echo '</table> ';
        
    }
?>
  </div>