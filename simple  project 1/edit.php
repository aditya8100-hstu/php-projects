<?php 

include 'header.php'; 
include 'dbconfig.php'; 

$id = $_GET['id'];

$sql = "SELECT * FROM student WHERE sid = '$id' ";
$result = mysqli_query($connect,$sql)or die("Unsuccessfull query");
if(mysqli_num_rows($result)>0){
  while ($row =  mysqli_fetch_assoc($result)) {
?>

<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>"/>
          <input type="text" name="sname" value="<?php echo $row['sname']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <select name="sclass" value="<?php echo $row['cname']; ?>"/>
              <!-- <option value="" selected disabled>Select Class</option> -->

              <?php
                    $sql1 = "SELECT * FROM studentclass";
                    $result1 = mysqli_query($connect,$sql1)or die("Unsuccessfull query");
                    if(mysqli_num_rows($result1)>0){
                    while ($row1 =  mysqli_fetch_assoc($result1)) {   
                    if($row['sclass'] == $row1['cid']){
                      $select = 'selected';
                    } else{
                          $select = "";
                    }                                  
              ?>
              <option value=" <?php  echo  $row1['cid'];?> "> <?php  echo $row1['cname'];?> </option>

            <?php } } ?>
             
          </select>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['sphone']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php } } ?>
</div>
</div>
</body>
</html>
