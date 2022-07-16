
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
    <a href="tranferrequest.php">transfer request</a>
    <a href=""></a>cancel request<a href="searchitem.php">search item</a>
    <a href="send_request.php">send request</a>
    <a href="logout.php">logout</a>
   </div>
   <div>
   <?php

// Include database file
include '..\config.php';

           $s_id = $_POST['sender_id'];
          $s_name = $_POST['sender_name'];
          $r_id = $_POST['reciver_id'];
          $r_name = $_POST['reciver_name'];
          $name = $_POST['itemname'];
          $qua = $_POST['quantity'];
          $date = $_POST['date'];
          $college=$_POST['select'];
          $query="INSERT INTO transfer(s_id,s_name,itemname,quantity,requestdate,college,reciver_id,reciver_name) 
          VALUES('$s_id','$s_name','$name','$qua','$date','$college','$r_id','$r_name')";
          $sql = mysqli_query($conn,$query);
          if ($sql==true)
           {
              
              echo "request transfer !";
          }else{
              echo "request failed plaese try again!";
          }

?>
   </div>
   </div>
</body>
</html>