<?php

include('..\config.php');
$req_id=$_POST['borrow_id'];
$cus_id = $_POST['cus_id'];
$cus_name = $_POST['cus_name'];
$itemid=$_POST['itemid'];
$item=$_POST['itemname'];
$model=$_POST['model'];
$quantity=$_POST['quantity'];
$que=$_POST['price'];
$date=$_POST['date'];
$college=$_POST['select'];

$sql="select * from borrowitem where borrow_id='$req_id'
 and cus_id='$cus_id' and itemid='$itemid' and college='$college' ";
 $acc="INSERT INTO return_item(borrow_id,cus_id,cus_name,itemid,itemname,quantity,price,returndate,college)
VALUES('$req_id','$cus_id','$cus_name','$itemid','$item','$quantity','$que','$date','$college')";
 $accc="INSERT INTO return_item(borrow_id,cus_id,cus_name,itemid,itemname,model,quantity,price,returndate,college) 
 VALUES('$req_id','$cus_id','$cus_name','$itemid','$item','$quantity','$que','$date','$college','retuned')";
 $update="update  item set free=free+$quantity,onuse=onuse-$quantity where itemid='$itemid'";
 $updat="update borrowitem set quantity=quantity-$quantity WHERE borrow_id='$req_id'";

if(isset($_POST['accept'])){ 
  $resalt=mysqli_query($conn,$sql);
if($resalt)
{$check=mysqli_fetch_array($resalt);
  $resa=$check['quantity']>=$quantity;
  if($resa){
if(mysqli_query($conn,$acc))
{
    $dele=mysqli_query($conn,$update);
    $updatee=mysqli_query($conn,$updat);
     if($dele)
if($updatee&&$dele){
  echo "return sussfull";
  }
  else echo " return  fall sessfull";


else echo "no return succefull is insertd";
}else echo "qquantity no correct";
}else echo "not get";
}else echo "not selescted";
}
 ?>