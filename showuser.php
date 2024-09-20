<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #007bff;
  color: white;
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
.button {
  background-color: #333;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>

    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
  

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="showuser.php">All user</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <li style="float:right">

    <a class="active" href="logout.php">Logout</a>
  </li>
  
</ul>

<h1>A Fancy Table</h1>
<a href='register.php' class='button'>Add</a>

<table id="customers">
  <tr>
    <th>id</th>
    <th>username</th>
    <th>address</th>
    <th>zipcode</th>
    <th>tel</th>
    <th>lineid</th>
    <th>Action</th>
  </tr>
  <?php
    $sql = 'SELECT * FROM tb_register';
    $query = $conn->query($sql);
    $i=0;
    while ($fet_user = $query->fetch_object()) {
        $i++;
    
?>
<td>
 <tr>
    <td><?php echo $fet_user->std_id; ?></td>
    <td><?php echo $fet_user->std_name; ?></td>
    <td><?php echo $fet_user->std_address; ?></td>
    <td><?php echo $fet_user->std_zipcode; ?></td>
    <td><?php echo $fet_user->std_tel; ?></td>
    <td><?php echo $fet_user->std_lineid; ?></td>

    <td><a href='register.php?std_id=<?php echo $fet_user->std_id;?>' class='button'>Edit</a><a href='api/api_deluser.php?std_id=<?php echo $fet_user->std_id;?>' class='button' style="background-color:red;" onclick="return confirm('คุณต้องการที่จะลบรายการนี้ใช่ไหม?')">Del</a>
    
  </td>
  </tr>
  <?php } ?>
</table>

</body>
</html>