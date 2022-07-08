
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
    <a href="">login</a>
    <a href="logout.php">logout</a>
   </div>
   <div>
   <?php
include('..\config.php');
$req_id=$_POST['req_id'];
$cus_id = $_POST['cus_id'];
$cus_name = $_POST['cus_name'];
$item=$_POST['itemname'];
$que=$_POST['quantity'];
$date=$_POST['date'];

$accept="Accept";
$reject="Reject";
$delete=" delete from request_item where req_id='$req_id'";
$acc="INSERT INTO approved_item(req_id,cus_id,cus_name,itemname,quantity,request_date,college_dean) 
VALUES('$req_id','$cus_id','$cus_name','$item','$que','$date','$accept')";
$rej="INSERT INTO approved_item(req_id,cus_id,cus_name,itemname,quantity,request_date,college_dean) 
VALUES('$req_id','$cus_id','$cus_name','$item','$que','$date','$reject')";
if(isset($_POST['accept']))
{ $dele=mysqli_query($conn,$delete);
  $re=mysqli_query($conn,$acc);
  if($re)
  echo "Accepted sussfull";
  else echo " data is not insertd";
}
if(isset($_POST['reject']))
{ $del=mysqli_query($conn,$delete);
$re=mysqli_query($conn,$rej);
if($re){
echo "request is rejected";
else echo "not data is insertd";
}

}
 ?>

    <div id="fo">
	&copy; 2022 All Right Reserved
</div>
   </div>
   </div>
</body>
</html>