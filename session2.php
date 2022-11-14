<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "sample1");
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$sessid = $_SESSION['email'];
//echo print_r($_SESSION);
echo $sessid;
$sql = "SELECT names FROM stayinfo WHERE email = $sessid";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['names'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Session</title>
    </head>
    <body>
        <h1>Hello , <?php echo($name)?> You are currently logged in the payment page</h1>
    <body>
</html>