
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
  <form action="registerrequest.php" method="POST">
  <div class="form-group">
      <label for="cus_id">cus_id:</label>
      <input type="text"  name="cus_id" placeholder="Enter cus_id" required="">
    </div>
    <div class="form-group">
      <label for="cus_name">cus_name :</label>
      <input type="cus_name"  name="cus_name" placeholder="Enter cus_name" required="">
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
    <input type="submit" name="submit"  style="float:center;" value="Submit">
  </form>
</div>
   
   </div>
</body>
</html>