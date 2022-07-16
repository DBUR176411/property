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

   <div class="container">
  <form action="registeritem.php" method="POST">
  <div class="form-group">
      <label for="item name">item name:</label>
      <input type="text"  name="itemname" placeholder="Enter name" required="">
    </div><br>
    
    <div class="form-group">
      <label for="model">model :</label>
      <input type="text"  name="model" placeholder="Enter model" required="">
    </div><br>
    <div class="form-group">
      <label for="model">quantity :</label>
      <input type="text"  name="quantity" placeholder="Enter quantity" required="">
    </div><br>
    <div class="form-group">
      <label for="price">unit price:</label>
      <input type="decimal"  name="price" placeholder="Enter unit price" required="">
    </div><br>
    <div class="form-group">
      <label for="date">register date:</label>
      <input type="date"  name="date" placeholder="Enter date" required="">

    </div><br>
    <div>Select College
    <select name="select">
    <option>select</option>
    <option>computing</option>
    <option >Enginering</option>
    <option>FB</option>
    <option >computional </option>
     <option >Law</option>
    </select><br></div><br>
    <div class="form-group">
      <label for="shelf no">shelf number :</label>
      <input type="text"  name="shelf" placeholder="Enter shelf Number" required="">
    </div><br><div><div>
    <input type="submit" name="submit"  style="float:center;" value="Submit">
    <input type="reset" value="cancle">
    </div></div>
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
