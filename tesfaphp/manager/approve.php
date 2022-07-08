
<?php
include('..\config.php');
$id=$_POST['ID'];

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
    <a href="searchitem.php">Search Item</a><a href=""></a>
    <a href="">login</a>
    <a href="logout.php">logout</a>
   </div>
   <div>
    <form action="approve.php" method="post">
        enter request: <input type="text" name="req_id" placeholder="enter request id"
         value="<?php echo $id;?>">
    <input type="submit" name="accept" value="accept">
    <input type="submit" name="reject" value="reject">
</form>
   <?php
include('..\config.php');

$accept="Accept";
$reject="Reject";
//$borrow=$_POST['ID'];
//$do=$_POST['req_id'];
mysqli_select_db($conn,"property");
if(isset($_POST['accept']))
{$updat="update approved_item set manager='accept' where req_id='$_POST[req_id]'";
  $ree=mysqli_query($conn,$updat);
  if($ree)
  echo "Accepted sussfull";
  else echo " data is not insertd";
}
if(isset($_POST['reject']))
{$update="update approved_item set manager='reject' where req_id='$_POST[req_id]'";
$rre=mysqli_query($conn,$update);
if($rre)
echo "request is rejected";
else echo "not data is insertd";
}


 ?>

    <div id="fo">
	&copy; 2022 All Right Reserved
</div>
   </div>
   </div>
</body>
</html>