
 
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
    <a href="searchitem.php">Search Item</a><a href=""></a>
    <a href=""></a>
    <a href="logout.php">logout</a>
   </div>
   <div><br><br>
   <?php
include( '../config.php');

$result = mysqli_query($conn,"SELECT * FROM request_item");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> </title>
 <link rel="stylesheet" type="text/css" href="css/login.css"> 
   <link rel="stylesheet" type="text/css" href="login_check.css"> 
 </head>
<body>

<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table border='2' align='center' width="800" cellpading="6">
  
  <tr>
    <td>request id</td>
  <td>customer id</td>
    <td>customer Name</td>
    
    <td>item Name</td>
    <td>quantity</td>
    <td>request date </td>
    <td>approve</td>
  </tr>
<?php
$i=0;

while($row = mysqli_fetch_array($result)) {
?>
<tr> <td><?php echo $row["req_id"] ?></td>
     <td><?php echo $row["cus_id"]; ?></td>
    <td><?php echo $row["cus_name"]; ?></td>
    
    <td><?php echo $row["itemname"]; ?></td>
    <td><?php echo $row["quantity"]; ?></td>
    <td><?php echo $row["date"]; ?></td>
   <td> 
    <form method="post" action="approved.php" >
    <a herf="approve_request.php">
    <input type="hidden" name="req_id" value="<?php echo $row["req_id"];?>">
    <input type="hidden" name="cus_id" value="<?php echo $id; ?>" >
    <input type="hidden" name="cus_id" value="<?php echo $row["cus_id"]; ?>" >
      <input type="hidden" name="cus_name" value="<?php echo $row["cus_name"]; ?>" >
      
      <input type="hidden" name="itemname" value="<?php echo $row["itemname"]; ?>" >
      <input type="hidden" name="quantity" value="<?php echo $row["quantity"]; ?>" >
      <input type="hidden" name="date" value="<?php echo $row["date"]; ?>" >
      <input type="submit" name="approve" value="approve">
</a>

</form>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
   </div>
   <div class="footer">
	&copy; 2022 All Right Reserved
</div>
   </div>
</body>
</html>