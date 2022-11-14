<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "db";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Unable to connect to server.  <br> Error:: %s\n". $conn -> error);
if (mysqli_connect_errno())
{
echo "Unable to connect to server " . mysqli_connect_error();
}

function CloseCon($conn)
{
$conn -> close();
}
?>