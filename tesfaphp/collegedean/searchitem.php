
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
    <a href="item.php">Search Item</a><a href=""></a>
    <a href="">login</a>
    <a href="logout.php">logout</a>
   </div>
   <div>
		<form action="displayitem.php" method="post">
			item name
			<input type="text" name="itemname"><br>
			college
			<input type="text" name="college">
			<input type="submit" value="search">
		</form>
	</div>
    <div class="footer">
	&copy; 2022 All Right Reserved
</div>
   </div>
   </div>
</body>
</html>