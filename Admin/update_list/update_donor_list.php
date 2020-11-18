<html>
<head>
<title>ONLINE BLOOD BANK</title>
<link rel="stylesheet" type="text/css" href="../../CSS/donor_list.css">
</head>
<body>
	<center><h1>ONLINE BLOOD BANK</h1> </center>
	<br>
	<ul>
  	<li><a href='../../index.html'>Home</a></li>
	<li><a href='../../donor_registration.html'>Become A Donor</a></li>
  	<li><a href='../../recipient_registration.html'>Request for Blood</a></li>
  	<li><a href='../../bloodbankregistration.html'>Blood Bank Registration</a></li>
 	<li><a href='../../Donor_List.php'>Donor List</a></li>
 	<li><a href='../../bloodrequest.php'>Blood Request</a></li>
 	<li><a href='../../search.php'>Search Blood</a></li>
	<li><a href='../../why_become_adonor.html'>Why Become a Blood Donor</a></li>
	<li><a class="active" href='../adminpage.php'>Admin</a></li>
	</ul>
	<br>
	<br>
<center>
	<?php
$link = mysqli_connect("localhost", "moidulha_bbms", "Password@988", "moidulha_bgmsdb");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
    $sql = "SELECT name, donid, address, pno, gender, dob, bgroup FROM donor";
}
$result = $link->query($sql);
echo "<h2>Admin Area</h2>";
if (mysqli_num_rows($result) > 0) {
	echo "<h2>Update Donor List</h2>";
    // output data of each row
    echo "<table border=2>";
	echo "<tr><th>Donor Name</th><th>Blood Group</th><th>Address</th><th>Mobile Number</th><th>Gender</th><th>Date of Birth</th><th>Action</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
        echo "<td>". $row["name"]. "</td><td>" . $row["bgroup"]. "</td><td>" . $row["address"]. "</td><td>" . $row["pno"]."</td><td>".$row["gender"]."</td><td>".$row["dob"]."</td><td>"."<a href='updatedlist.php?id=".$row["donid"]."'><button>Edit</button></a>"."   "."<a href='deletedlist.php?id=".$row["donid"]."'><button>Delete</button></a>"."</td></tr>";
	echo "</tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}



mysqli_close($link);
?> 
</center>
</body>
</html>
</body>
</html>
