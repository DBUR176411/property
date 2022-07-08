<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>porperty</title>
    <link rel="stylesheet" type="text/css" href="..\css/login.css"> 
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
    <a href="">home</a>
    <a href=""></a>contact us<a href="">about us</a>
    <a href="">login</a>
    <a href="logout.php">logout</a>
   </div>
   <?php

include('..\config.php');
$req_id=$_POST['req_id'];
$cus_id = $_POST['cus_id'];
$cus_name = $_POST['cus_name'];
$itemid=$_POST['itemid'];
$item=$_POST['itemname'];
$model=$_POST['model'];
$que=$_POST['price'];
$date=$_POST['date'];
$college=$_POST['select'];

$sql="select * from item where itemid='$itemid' ";
$resalt=mysqli_query($conn,$sql);
if($resalt)
{
$acc="INSERT INTO borrowitem 
VALUES('$req_id','$cus_id','$cus_name','$itemid','$item','$model','$que','$date','$college')";
$update="update  item set status='lost' where itemid='$itemid'";

if(isset($_POST['accept']))
{
  $re=mysqli_query($conn,$acc);
 
  if($re)
  {$dele=mysqli_query($conn,$update);

  echo "paid  Item price sussfull";
  }
  else echo " data is not insertd";
}

else echo "not data is insertd";
}else echo "item is not free";

 ?>
 <div class="footer">
	&copy; 2022 All Right Reserved
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>