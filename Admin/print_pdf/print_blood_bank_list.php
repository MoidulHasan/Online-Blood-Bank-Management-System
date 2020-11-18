<html>
<head>
<title>ONLINE BLOOD BANK</title>
<link rel="stylesheet" type="text/css" href="../../CSS/donor_list.css">
</head>
<body>
	<center><h1>ONLINE BLOOD BANK</h1> </center>
	<br>
	<ul>
  	<li><a href='../../Home.html'>Home</a></li>
	<li><a href='../../donor_registration.html'>Become A Donor</a></li>
  	<li><a href='../../recipient_registration.html'>Request for Blood</a></li>
  	<li><a href='../../bloodbankregistration.html'>Blood Bank Registration</a></li>
 	<li><a href='../../Donor_List.php'>Donor List</a></li>
 	<li><a href='../../bloodrequest.php'>Blood Request</a></li>
 	<li><a href='../../Search.php'>Search Blood</a></li>
	<li><a href='../../why_become_adonor.html'>Why Become a Blood Donor</a></li>
	<li><a class="active" href='../adminpage.php'>Admin</a></li>
	</ul>
	<br>
	<br>
<center>
	<div id="printableArea">
	<?php
$link = mysqli_connect("localhost", "root", "", "bloodbank");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    $sql1 = "SELECT bbname, bbmname, mobilenumber, address FROM bloodbank";
$result1 = $link->query($sql1);
echo "<h2>BloodBank List</h2>";

if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    echo "<table border=1>";
    echo "<tr><th>Bloodbank Name</th><th>Bloodbank Manager Name</th><th>Mobile Number</th><th>Address</th></tr>";
    while($row = mysqli_fetch_assoc($result1)) {
    echo "<tr>";
        echo "<td>". $row["bbname"]. "</td><td>" . $row["bbmname"]. "</td><td>" . $row["mobilenumber"]. "</td><td>" . $row["address"]. "</td></tr>";
    echo "</tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($link);
?> 
    </div>
<br>
<input type="button" onclick="printDiv('printableArea')" value="Print Blood Request List" />
</center>
<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>
</body>
</html>
