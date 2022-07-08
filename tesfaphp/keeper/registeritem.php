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

  // Include database file
  include '..\config.php';

            $item= $_POST['itemname'];
            $serial = $_POST['Serial'];
			$model = $_POST['model'];
			$price = $_POST['price'];
			$date = $_POST['date'];
            $select=$_POST['select'];
			$query="INSERT INTO item(itemname,serialNo,model,price,register_date,college_name,status) 
            VALUES('$item','$serial','$model','$price','$date','$select','free')";
			$sql = mysqli_query($conn,$query);
			if ($sql==true)
             {
			    
                echo "register sucessfull !";
			}else{
			    echo "item not recorederd failed try again!";
			}

?>
