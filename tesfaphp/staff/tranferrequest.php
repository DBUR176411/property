
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
    <a href=""></a><a href="searchitem.php">search item</a>
    <a href="">canle request</a>
    <a href="logout.php">logout</a>
   </div>
   
   <div class="container">
  <form action="reg_transfer.php" method="POST">
  <div class="form-group">
      <label for="cus_id">sender_id:</label>
      <input type="text"  name="sender_id" placeholder="Enter sender_id" required="">
    </div>
    <div class="form-group">
      <label for="sender_name">sender_name :</label>
      <input type="text"  name="sender_name" placeholder="Enter sender_name" required="">
    </div>
    <div class="form-group">
      <label for="cus_id">reciver_id:</label>
      <input type="text"  name="reciver_id" placeholder="Enter reciver_id" required="">
    </div>
    <div class="form-group">
      <label for="sender_name">reciver_name :</label>
      <input type="text"  name="reciver_name" placeholder="Enter reciver_name" required="">
    </div>
    <div class="form-group">
      <label for="itemname">itemname :</label>
      <input type="itemname"  name="itemname" placeholder="Enter itemname" required="">
    </div>
    <div class="form-group">
      <label for="model">quantity:</label>
      <input type="text"  name="quantity" placeholder="Enter quantity" required="">
    </div>
    <div class="form-group">
      <label for="unit">request date:</label>
      <input type="date"  name="date" placeholder="Enter date" required="">
    </div>
    college
    <select name="select">
    <option>select</option>
    <option>computing</option>
    <option >Enginering</option>
    <option>FB</option>
    <option >computional </option>
     <option >Law</option>
    </select><br>
    <input type="submit" name="submit"  style="float:center;" value="Submit">
  </form>
</div>
   
   </div>
</body>
</html>