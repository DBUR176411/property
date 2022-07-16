
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
   <?php
include('..\config.php');
$item=$_POST['itemname'];
$college=$_POST['select'];
$sql="select * from item where itemname='$item' and college_name='$college'";
$result = mysqli_query($conn,"SELECT * FROM item where itemname='$item' and college_name='$college'");

?>
<?php
//$row=mysqli_fetch_array($result);
if ($row = mysqli_num_rows($result)) {
?><div>
  <table border='2' align='center' width=80%>
  
  <tr>
    <td>item id</td>
    <td>item Name</td>
    <td>serialNo</td>
	<td>model</td>
    <td>price </td>
    <td>register date </td>
	<td>college</td>
    <td>free</td>
    <td>onuse</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr><td><?php echo $row["itemid"];?></td>
    <td><?php echo $row["itemname"]; ?></td>
    <td><?php echo $row["itemid"]; ?></td>
    <td><?php echo $row["model"]; ?></td>
    <td><?php echo $row["price"]; ?></td>
    <td><?php echo $row["register_date"]; ?></td>
	<td><?php echo $row["college_name"]; ?></td>
    <td><?php echo $row["free"]; ?></td>
    <td><?php echo $row["onuse"]; ?></td>
</tr>
<?php
$i++; 
}
?>
</table>
</div>
 <?php
}
else{
    echo "No result found";
}
?>

    <div class="footer">
	&copy; 2022 All Right Reserved
</div>
   </div>
   </div>
</body>
</html>