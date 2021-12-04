<?php

$sid =   $_GET['id'];

include 'dbconfig.php';
$sql = " DELETE FROM student  
         WHERE sid = $sid";
$result = mysqli_query($connect,$sql)or die("Unsuccessfull query"); 

header("location:http://localhost/projects_of_PHP/school%20management%20system/index.php");
mysqli_close($result);

?>