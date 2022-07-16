
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
    <a href="send_request.php">send Request</a>
    <a href="searchitem.php">Search Item</a><a href=""></a>
    <a href="">cancle request</a>
    <a href="logout.php">logout</a>
   </div>
   <div>

		<form action="..\collegedean/displayitem.php" method="post">
			item name
			<input type="text" name="itemname"><br>
            college
    <select name="select">
    <option>select</option>
    <option>computing</option>
    <option >Enginering</option>
    <option>FB</option>
    <option >computional </option>
     <option >Law</option>
     <option >agricalture</option>
    </select><br>
<input type="submit" name="search" value="search">
		</form>
	</div>



    
    <div class="footer">
	&copy; 2022 All Right Reserved
</div>
   </div>
   </div>
</body>
</html>