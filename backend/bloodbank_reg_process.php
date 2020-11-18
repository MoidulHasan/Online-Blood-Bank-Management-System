<?php
$link = mysqli_connect("localhost", "moidulha_bbms", "Password@988", "moidulha_bgmsdb");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 if(isset($_POST['submit']))
{
$bbname = mysqli_real_escape_string($link, $_REQUEST['bbname']);
$grno = mysqli_real_escape_string($link, $_REQUEST['grno']);
$bbmname = mysqli_real_escape_string($link, $_REQUEST['bbmname']);
$mobilenumber = mysqli_real_escape_string($link, $_REQUEST['mobilenumber']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
}


$sql = "INSERT INTO bloodbank(bbname, grno, bbmname, mobilenumber, address) VALUES ('$bbname', '$grno', '$bbmname','$mobilenumber', '$address')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>