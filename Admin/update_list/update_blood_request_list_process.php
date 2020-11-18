<?php
 
$link = mysqli_connect("localhost", "moidulha_bbms", "Password@988", "moidulha_bgmsdb");
$rnid=$_REQUEST['id'];
$query = "SELECT * from bloodrequest where rnid='".$rnid."'"; 
$result = mysqli_query($link, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Blood Request Information</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<style>
   .form{width: 300px; margin: 0 auto;}
   input[type='submit']{padding: 10px 25px 8px; color: #fff; background-color: #0067ab; text-shadow: rgba(0,0,0,0.24) 0 1px 0; font-size: 16px; box-shadow: rgba(255,255,255,0.24) 0 2px 0 0 inset,#fff 0 1px 0 0; border: 1px solid #0164a5; border-radius: 2px; margin-top: 10px; cursor:pointer;}
     input[type='submit']:hover {background-color: #024978;}
</style>
<body>
<div class="form">
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$link = mysqli_connect("localhost", "root", "", "bloodbank");

$rnid=$_REQUEST['rnid'];
$name =$_REQUEST['name'];
$address = $_REQUEST['address'];
$pno = $_REQUEST['pno'];
$bgroup = $_REQUEST['bgroup'];


$update="Update bloodrequest set rnid='".$rnid."',  name='".$name."', address='".$address."', pno='".$pno."', bgroup='".$bgroup."'   where rnid='".$rnid."'";

mysqli_query($link, $update) or die(mysqli_error($update));
$status = "Record Updated Successfully. </br></br><a href='update_blood_request_list.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action="update_blood_request_list_process.php"> 
<input type="hidden" name="new" value="1" />
<input name="donid" type="hidden" value="<?php echo $row['donid'];?>" />
<p>Name:<input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['name'];?>" /></p>
<p>ID:<input type="text" name="rnid" placeholder="Enter New ID" required value="<?php echo $row['rnid'];?>" /></p>
<p>Blood Group:<input type="text" name="bgroup" placeholder="Enter Blood Group" required value="<?php echo $row['bgroup'];?>" /></p>
<p>Address:<input type="text" name="address" placeholder="Enter Address" required value="<?php echo $row['address'];?>" /></p>
<p>Mobile Number:<input type="text" name="pno" placeholder="Enter Mobile Number" required value="<?php echo $row['pno'];?>" /></p>

<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>

<br /><br /><br /><br />
</div>
</div>
</body>
</html>