<?php
    
    require 'connect.inc.php';
    $result = mysql_query ("select * from student,class where student.Class=class.Class_ID")or die(mysql_error);
    //$result1=mysql_query("select * from teacher,subject,class");
    if($result)
    {
       // echo 'ok';
        while ($row= mysql_fetch_assoc($result))
        {
            
            $student_name=$row['Name'];
            $student_address=$row['Address'];
            $student_id=$row['ID'];
            $student_class=$row['Class'];
            $class_name=$row['Class_ID'];
            $class_location=$row['Location'];
            //$c_student_id=$row['class.ID'];
            
            echo '<br>'. $student_name.'<br>'.$student_id.'<br>'.$student_class
                    .'<br>'.$class_location.'<br>';
            
        }
    }
?>