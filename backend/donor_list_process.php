<?php
$link = mysqli_connect("localhost", "root", "", "bloodbank");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
    $sql = "SELECT name, donid, address, pno, gender, dob, bgroup FROM donor";
}
$result = $link->query($sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table border=1>";
	echo "<tr><th>Donor Name</th><th>Blood Group</th><th>Address</th><th>Mobile Number</th><th>Gender</th><th>Date of Birth</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
        echo "<td>". $row["name"]. "</td><td>" . $row["bgroup"]. "</td><td>" . $row["address"]. "</td><td>" . $row["pno"]."</td><td>".$row["Gender"]."</td><td>".$row["dob"]."</td></tr>";
	echo "</tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 
