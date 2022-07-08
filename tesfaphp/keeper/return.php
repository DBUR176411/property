<?php

include('..\config.php');
$req_id=$_POST['borrow_id'];
$cus_id = $_POST['cus_id'];
$cus_name = $_POST['cus_name'];
$itemid=$_POST['itemid'];
$item=$_POST['itemname'];
$model=$_POST['model'];
$que=$_POST['price'];
$date=$_POST['date'];
$college=$_POST['select'];

$sql="select * from item where itemid='$itemid'And status='onuse' ";
$resalt=mysqli_query($conn,$sql);
if($resalt)
{
$acc="INSERT INTO return_item 
VALUES('$req_id','$cus_id','$cus_name','$itemid','$item','$que','$date','$college','retun')";
$update="update  item set status='lost' where itemid='$itemid'";
$delete="delete from return_item WHERE borrow_id='$req_id";
if(isset($_POST['accept']))
{
  $re=mysqli_query($conn,$acc);
 
  if($re)
  {$dele=mysqli_query($conn,$update);
mysqli_query($conn,$delete);
  echo "return sussfull";
  }
  else echo " data is not insertd";
}

else echo "not data is insertd";
}else echo "item is not free";

 ?>