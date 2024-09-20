<?php
  include 'connect.php';
?>
<!DOCTYPE html>
<html>
<style>
  input, select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

  }
  
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #007bff;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #333;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #007bff;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #01579b;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="register.php">All user</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <li style="float:right">
   

    <a class="active"href="logout.php">logout</a>
    

</li>
</ul>
<?php

  if(isset($_REQUEST['std_id'])) {
    $sql = "SELECT * FROM tb_register WHERE std_id='".$_REQUEST['std_id']."'";
    $query = $conn->query($sql);
    $fet = $query->fetch_object();
?>
<h3>แก้ไขข้อมูลผู้ใช้</h3>
<div>
  <form action="api/api_edituser.php?std_id=<?php echo $fet->std_id; ?>" method = "post"  enctype="multipart/form-data">
    <label for="std_id">std_id</label>
    <input type="text" id="fname" value="<?php echo $fet->std_id; ?>" name="std_id" placeholder="Your Usernstd_id">
    <label for="std_name">std_name</label>
    <input type="text" id="lname" value="<?php echo $fet->std_name; ?>" name="std_name" placeholder="Your name..">

    <label for="std_address">std_address</label>
    <input type="text" id="lname" value="<?php echo $fet->std_address; ?>" name="std_address" placeholder="Your address..">
    
    <label for="std_zipcode">std_zipcode</label>
    <input type="text" id="lname" value="<?php echo $fet->std_zipcode; ?>" name="std_zipcode" placeholder="Your zipcode..">

    <label for="std_tel">std_tel</label>
    <input type="text" id="lname" value="<?php echo $fet->std_tel; ?>" name="std_tel" placeholder="Your tel..">

    <label for="std_lineid">std_lineid</label>
    <input type="text" id="lname" value="<?php echo $fet->std_lineid; ?>" name="std_lineid" placeholder="Your last lineid..">

    

    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>
    <?php }else{ ?>
      <h3>เพิ่มผู้ใช้งาน</h3>
      <div>
  <form action="api/api_register.php" method = "post" enctype="multipart/form-data">
    <label for="std_id">std_id</label>
    <input type="text" id="std_id" name="std_id" placeholder="Your std_id..">

    <label for="std_name">std_name</label>
    <input type="text" id="lname" name="std_name" placeholder="Your last std_name..">

    <label for="std_address">std_address</label>
    <input type="text" id="lname" name="std_address" placeholder="Your last std_address..">
    
    <label for="std_zipcode">std_zipcode</label>
    <input type="text" id="lname" name="std_zipcode" placeholder="Your last std_zipcode ..">

    <label for="std_tel">std_tel</label>
    <input type="text" id="lname" name="std_tel" placeholder="Your last std_tel..">

    <label for="lineid">Lineid</label>
    <input type="text" id="lname" name="lineid" placeholder="Your last lineid..">

    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>
      <?php } ?>
      



</body>
</html>