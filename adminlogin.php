
<?php
$link = mysqli_connect("localhost", "moidulha_bbms", "Password@988", "moidulha_bgmsdb");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($link, $_POST['username']);
      $mypassword = mysqli_real_escape_string($link, $_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($link,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: Admin/adminpage.php");
      }
      else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      <link rel="stylesheet" type="text/css" href="CSS/adminlogin.css">
   </head>
   
   <body>
	<center>
         
   <h1>ONLINE BLOOD BANK</h1>
<br>
   <ul>
   <li><a href='index.html'>Home</a></li>
   <li><a href='donor_registration.html'>Become A Donor</a></li>
   <li><a href='recipient_registration.html'>Request for Blood</a></li>
   <li><a href='bloodbankregistration.html'>Blood Bank Registration</a></li>
   <li><a href='Donor_List.php'>Donor List</a></li>
   <li><a href='bloodrequest.php'>Blood Request</a></li>
   <li><a href='search.php'>Search Blood</a></li>
   <li><a href='why_become_adonor.html'>Why Become a Blood Donor</a></li>
   <li><a class="active" href='adminlogin.php'>Admin</a></li>
   </ul>
   <br>
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               					
            </div>
				
         </div>
			
      </div>
   </center>
   </body>
</html>