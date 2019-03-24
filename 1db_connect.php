<?php



$db_host="localhost";
$db_username="root";
$db_password="";
$db_nameof="book_db";


$db_connect=mysqli_connect($db_host,$db_username,$db_password,$db_nameof) or die();
//check the coknection
if (mysqli_connect_error())
{
  echo "failed to connect to mysql:".mysqli_connect_error();
}
else
{
echo "connection is successfull";
}

 ?>
