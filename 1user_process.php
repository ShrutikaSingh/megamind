<?php

include("1db_connect.php");
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$address=$_REQUEST['address'];

$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$zip=$_REQUEST['zip'];
$country=$_REQUEST['country'];








$query=mysqli_query($db_connect,"INSERT INTO users(name,email,phone,address,state,zip,country,city) VALUES ('$name','$email','$phone','$address','$state','$zip','$country)','$city')")or die(mysqli_error($db_connect));

print_R($_Post);

mysqli_close($db_connect);
header("location:1index.php?note=Success")

 ?>
