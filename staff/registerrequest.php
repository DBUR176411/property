
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
    <a href=""></a>cancel request<a href="searchitem.php">search item</a>
    <a href="send_request.php">send request</a>
    <a href="logout.php">logout</a>
   </div>
   <div>
   <?php

// Include database file
include '..\config.php';

           $cus_id = $_POST['cus_id'];
          $cus_name = $_POST['cus_name'];
          $name = $_POST['itemname'];
          $qua = $_POST['quantity'];
          $date = $_POST['date'];
          $query="INSERT INTO request_item(cus_id,cus_name,itemname,quantity,date) 
          VALUES('$cus_id','$cus_name','$name','$qua','$date')";
          $sql = mysqli_query($conn,$query);
          if ($sql==true)
           {
              
              echo "request sucessfull !";
          }else{
              echo "request failed try again!";
          }

?>
   </div>
   </div>
</body>
</html>