<?php
$link = mysqli_connect("localhost", "moidulha_bbms", "Password@988", "moidulha_bgmsdb");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 if(isset($_POST['submit']))
{
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$rnid = mysqli_real_escape_string($link, $_REQUEST['rnid']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$pno = mysqli_real_escape_string($link, $_REQUEST['pno']);
$bgroup = mysqli_real_escape_string($link, $_REQUEST['bgroup']);
}


$sql = "INSERT INTO bloodrequest(name, rnid, address, pno, bgroup) VALUES ('$name', '$rnid', '$address','$pno', '$bgroup')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>