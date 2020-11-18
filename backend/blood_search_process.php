<?php
$link = mysqli_connect("localhost", "moidulha_bbms", "Password@988", "moidulha_bgmsdb");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_POST['$searchbygroup']))
{
    $valueToSearch = $_POST['group'];
    // search in all table columns
    $query = "SELECT * FROM donor whare bgroup= '$valueToSearch' ";
    $search_result = filterTable($query);
   while($row = $result->fetch_assoc())
				{
	echo "<tr>";
        echo "<td>". $row["name"]. "</td><td>" . $row["bgroup"]. "</td><td>" . $row["address"]. "</td><td>" . $row["pno"]."</td><td>".$row["gender"]."</td><td>".$row["dob"]."</td></tr>";
	echo "</tr>";
    }
    
}
 else if(isset($_POST['searchbyaddress'])){
 	$valueToSearch = $_POST['address'];
    $query = "SELECT * FROM donor whare valueToSearch= address";
    $search_result = filterTable($query);
    while($row = mysqli_fetch_array($search_result) )
				{
	echo "<tr>";
        echo "<td>". $row["name"]. "</td><td>" . $row["bgroup"]. "</td><td>" . $row["address"]. "</td><td>" . $row["pno"]."</td><td>".$row["gender"]."</td><td>".$row["dob"]."</td></tr>";
	echo "</tr>";
    }
}
			
            
// function to connect and execute the query
function filterTable($query)
{
    $link = mysqli_connect("localhost", "root", "", "bloodbank");
    $filter_Result = mysqli_query($link, $query);
    return $filter_Result;
}

?>