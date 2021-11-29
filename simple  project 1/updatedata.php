<?php

include 'dbconfig.php';

$sid = $_POST['sid'];
$sname = $_POST['sname'];
$saddress = $_POST['saddress'];
$sclass = $_POST['sclass'];
$sphone = $_POST['sphone'];


$sql = " UPDATE student 
         SET  sname = '$sname' , saddress = '$saddress' , sclass = '$sclass' , sphone = '$sphone' 
         WHERE sid = $sid ";
$result = mysqli_query($connect,$sql)or die("Unsuccessfull query");

header("location:http://localhost/projects_of_PHP/school%20management%20system/index.php");
mysqli_close($connect);




?>