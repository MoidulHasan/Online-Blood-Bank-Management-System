<?php
$link = mysqli_connect("localhost", "moidulha_bbms", "Password@988", "moidulha_bgmsdb");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 if(isset($_POST['submit']))
{
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$donid = mysqli_real_escape_string($link, $_REQUEST['donid']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$pno = mysqli_real_escape_string($link, $_REQUEST['pno']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);
$bgroup = mysqli_real_escape_string($link, $_REQUEST['bgroup']);
}


$sql = "INSERT INTO donor(name, donid, address, pno, gender, dob, bgroup) VALUES ('$name', '$donid', '$address','$pno', '$gender','$dob', '$bgroup')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>