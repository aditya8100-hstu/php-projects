<?php


include 'dbconfig.php';

$sname = $_POST['sname'];
$saddress = $_POST['saddress'];
$class = $_POST['class'];
$sphone = $_POST['sphone'];


$sql = " INSERT INTO student (sname,saddress,sclass,sphone) VALUES ( '$sname' , '$saddress' , '$class' ,'$sphone') ";
$result = mysqli_query($connect,$sql)or die("Unsuccessfull query");

header("location:http://localhost/projects_of_PHP/school%20management%20system/index.php");
mysqli_close($connect);



?>