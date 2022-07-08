
 <?php
include('..\config.php');
$id=$_POST['req_id'];
$p = $_POST['cus_id'];
$emp = $_POST['cus_name'];
$item=$_POST['itemname'];
$que=$_POST['quantity'];
$date=$_POST['date'];
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>porperty</title>
    <link rel="stylesheet" type="text/css" href="..\css/dean.css"> 
</head>
<body>
    <div>
   <div id="id">
<table>
    <tr><td>
    <img src="..\img/dbu.jfif" alt="not found" width="200px" height="100"></td>
    <td><h1>property manegment sysyem</h1>
    </td></tr>
</table>
   </div> 
   <div id="link">
    <a href="view_request.php">View Request</a>
    <a href="item.php">Search Item</a><a href=""></a>
    <a href="">login</a>
    <a href="logout.php">logout</a>
   </div>
   <div id="tt">
  <form action="approvedata.php" method="POST">
    <div>
      <lable for="form-group">request id
        <input type="text" name="req_id" placeholder value="<?php echo $id;?>">
    </div><br>
  <div class="form-group">
      <label for="cus_id">cus_id:</label>
      <input type="text"  name="cus_id" placeholder="Enter cus_id" value="<?php echo $p ;?>">
    </div><br>
    <div class="form-group">
      <label for="cus_name">cus_name :</label>
      <input type="cus_name"  name="cus_name" placeholder="Enter cus_name" value="<?php echo $emp ;?>">
    </div><br>
    <div class="form-group">
      <label for="itemname">itemname :</label>
      <input type="itemname"  name="itemname" placeholder="Enter itemname" value="<?php echo $item ;?>">
    </div><br>
    <div class="form-group">
      <label for="model">quantity:</label>
      <input type="text" name="quantity" placeholder="Enter model" value="<?php echo $que ;?>">
    </div><br>
    <div class="form-group">
      <label for="unit">request date:</label>
      <input type="unit"  name="date" placeholder="Enter unit" value="<?php echo $date ;?>">
    </div><br>
    <input type="submit" name="accept"   value="accept">
    <input type="submit" name="reject" value="reject">
  </form>
</div>
</div>
   <div>

    <div class="footer">
	&copy; 2022 All Right Reserved
</div>
   </div>
   </div>
</body>
</html>