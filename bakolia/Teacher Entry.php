<?php ob_start();?>
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
div.studentform
    {
background-color:skyblue;
text-align: center;

}
    
    .textarea{
        font-size: 30px
    }

    input[type='text']{
        width: 300px;
        height: 25px;
        border-radius: 2px
    }
input[type=submit] {
    background-color:green;
    border: none;
    color:white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
</style>




</style>
</head>
<body>
<?php
include 'connect.inc.php';
?>

<div class="header">
  <h2>BAKOLIA HIGH SCHOOL</h2>
  <p>Education for Humanization</p>
  
<div class="header right" style="font-size: 20px">
  
  <div class="" style="font-size: 20px">
  
      <a style="" href = "logout.php"><button style="background-color:green;padding: 10px;color: white">Log Out</button></a>
</div>
</div>



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


<div class="studentform" >

    <form action="" method = "POST">
  <fieldset>
    <legend><h3>New Teacher Entry:</h3></legend>
<div class="textarea">
   
    Name:<br>

  <input type="text" name="name">
  <br>
      
  Designation:<br>
  <input type="text" name="des">
  <br>
 
 Salary:<br>
  <input type="text" name="salary">
<br>

<div class="buttonstyle">
  <input type="submit" value="Submit">
</div>
    </div>
  </fieldset>
</form>
    
      
    </div>
    
    <?php
    
        if(isset($_POST['name']) && isset($_POST['des']) && isset($_POST['salary']))
        {
                if (!empty($_POST['name']) && !empty($_POST['des']) && !empty($_POST['salary'])) {
                    //echo $id;
                echo $name=$_POST['name'];
                echo $des=$_POST['des'];
                echo $salary= $_POST['salary'];
                //echo $Add=$_POST['address'];
                
                $up=mysql_query("INSERT  INTO `teacher` VALUES('$name','','','','$des', '$salary')");
        //$fet=mysql_fetch_assoc($up);
        if($up)
        {
            header('Location: Teacher Info.php');
        }else{
        echo "The data was not inserted";
            }
        }
        }
        
?>