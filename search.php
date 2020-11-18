
<?php
$con = mysqli_connect("localhost", "root", "", "bloodbank");

if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM donor";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM donor WHERE bgroup ='$name'";
}
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>ONLINE BLOOD BANK</title>
<link rel="stylesheet" type="text/css" href="CSS/donor_list.css">

</head>
<body>
<center><h1 style="color: white">ONLINE BLOOD BANK</h1> </center>
    <br>
    <ul>
    <li><a href='Home.html'>Home</a></li>
    <li><a href='donor_registration.html'>Become A Donor</a></li>
    <li><a href='recipient_registration.html'>Request for Blood</a></li>
    <li><a href='bloodbankregistration.html'>Blood Bank Registration</a></li>
    <li><a href='Donor_List.php'>Donor List</a></li>
    <li><a href='bloodrequest.php'>Blood Request</a></li>
    <li><a class="active" href='Search.php'>Search Blood</a></li>
    <li><a href='why_become_adonor.html'>Why Become a Blood Donor</a></li>
    <li><a href='adminlogin.php'>Admin</a></li>
    </ul>
    <br>
    <br>
<form action="" method="GET">
<input type="text" placeholder="Type the Blood Group here" name="search">&nbsp;
<input type="submit" value="Search" name="btn">
</form>
<center>
<?php

echo "<table border=1>";
    echo "<tr><th>Donor Name</th><th>Blood Group</th><th>Address</th><th>Mobile Number</th><th>Gender</th><th>Date of Birth</th></tr>";
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['bgroup']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['pno']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td><?php echo $row['dob']; ?></td>
    </tr>
    <?php
}
?>
</table>
</center>
</body>
</html>