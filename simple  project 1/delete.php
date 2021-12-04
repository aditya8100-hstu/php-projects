<?php include 'header.php';

if(isset($_POST['deletebtn'])){
    $sid =   $_POST['sid'];
    include 'dbconfig.php';
    $sql = " DELETE FROM student  
         WHERE sid = $sid";
    $result = mysqli_query($connect,$sql)or die("Unsuccessfull query"); 

    header("location:http://localhost/projects_of_PHP/school%20management%20system/index.php");
    mysqli_close($result);  

}

 ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
