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
div.row{
    
    background-color:skyblue;
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
    {background-color:skyblue;
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


</style>




</style>
</head>
<body>
<?php

?>

<div class="header">
  <h2>BAKOLIA HIGH SCHOOL</h2>
  <p>Education for Humanization</p>
  <form action="logout.php">
<div class="header right" style="font-size: 20px">
  
  <div class="" style="font-size: 20px">
      <a> 
       <?PHP 
        include 'connect.inc.php';
        include 'core.inc.php'; 
        $UID=$_SESSION['user_id'];
        $SUN=mysql_query("SELECT Name FROM teacher WHERE ID=$UID") or die("error");
        $UN= mysql_fetch_assoc($SUN);
        
        echo $UN ['Name'];
        ?></a>
  
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


<div class="row" >
  <div class="column side color">
    <h2>Chairman's Message</h2>
    <p>Bakolia High School started its journey in 1977 with the slogan “Education for Humanization”. It is expected that the academic training at this great institution would make the students of this school physically and mentally sound enough to adjust and complete with the rest in the pursuit of higher studies.<br>
Mr.Sajjad Hossain<br>
Chairman<br>
Bakolia High School</p>
  </div>
  <div class="column middle color">
    <h2>Welcome to Bakolia High School</h2>
    <p>Bakolia High School is a renowned college for its higher quality education and a good number of quality faculty members. The school was established in 1977 for the requirement of quality education among the people of Chittagong.</p>
    <p>it was thought as a wonderful idea to have a public School of a very high standard which will admit boys and girls from all walks of life strictly on merit through admission tests. The motto of this institution is to make the students worthy citizens and able leaders to serve the country and the world community. Besides academic programmes.They would eventually turn out as complete men and women having full confidence in their ability in the challenging world.</p>
  </div>
  <div class="column side color">
    <h2>Principle's Message</h2>
    <p>It is our immense pleasure to inform you that we are introducing informational technology to the students in this institution. This new dimension will make our administrative and academic activities more efficient, speedy and transparent providing all kind of necessary information. Anybody wishing to get information about this institution can easily visit our website at any time. Any recommendation in this regard will be accepted cordinally.<br>
Mr.Jakaria Ahmed<br>
Headmaster<br>
Bakolia High School</p>
  </div>
</div>

<div class="footer">
  <p style="text-decoration-style: solid ">CONTACT US</p>
<p>17,Zakir Hossain Road,Road-5,Bakolia,Chittagong,
Call: 02-48999988876, 02-4899988877</p>
</div>
  