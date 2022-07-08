<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>porperty</title>
    <link rel="stylesheet" type="text/css" href="css/login.css"> 
</head>
<body>
   <div>
   <div id="id">
<table>
    <tr><td>
    <img src="img/dbu.jfif" alt="not found" width="200px" height="100"></td>
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
   <div id="form">
   <form method="post" action="login.php">
      
                <h3 align="center">login form</h3>

                        <td align="right">user name:
                        <input type="text" name="user" placeholder="enter user name"><br><br>
                    
                        password: 
                    <input type="text" name="pass" placeholder="enter your password"><br><br>
                
                        Role: 
                         <select name="select">  
                                           
                        <option>manager</option>
                         <option >dean</option>
                         <option>staff</option>
                            <option>keeper</option>
                        <option>techinail</option>
                        </select><br><br>
          
               <input type="submit" name="login" value=" login  ">
               <input type="reset" name="" value="  reset  "  >
          
   
          <br>
    
             <a href="">forgot password?</a>
             
        
         <br><br>
      
   </form>
   </div>
   <div class="footer">
	&copy; 2022 All Right Reserved
</div>
</div>
</body>
</html>


<?php
//session_start();
include('config.php');
 if(isset($_POST['login']))
 {
  $acc=$_POST['select'];
   $user =$_POST['user'];
  
   $password=$_POST['pass'];
 
   $query = "SELECT * FROM user WHERE  password= '$password' AND role='$acc' AND username='$user';";
   $result_set=mysqli_query($conn,$query);
  $row=mysqli_fetch_array($query);
  // $reg=$row['emp_id'];
   //$_SESSION['tesfa']=$reg;
if(!$result_set){
die("query is failed".mysqli_error());
}
switch ($acc) 
{case"manager":
   //$_SESSION['role']=$acc;
   //$_SESSION['email']=$user;
   //$_SESSION['password']=$password;
    echo "<script>window.location='manager/manager.php';</script>";
    break;
case "keeper":
//$_SESSION['keeper']=$acc;
   // $_SESSION['email']=$user;
   // $_SESSION['password']=$password;

    echo "<script>window.location='keeper/keeperpage.php';</script>";
    break;
case "staff":
   // $_SESSION['staff']=$acc;
   // $_SESSION['email']=$user;
   // $_SESSION['password']=$password;
    echo "<script>window.location='staff/staffpage.php';</script>";
    break;
    
 case "Technitian":
   // $_SESSION['role']=$acc;
   // $_SESSION['email']=$user;
   // $_SESSION['password']=$password;
        echo "<script>window.location='techial/technical.php';</script>";
        break;
 case "dean":
    //$_SESSION['dean']=$acc;
   //$//_SESSION['email']=$user;
  // $_SESSION['password']=$password;
            echo "<script>window.location='collegedean/collegedean.php';</script>";
            break;
    default:
    echo "<script>window.location='login.php';</script>";
    

}

}
?>