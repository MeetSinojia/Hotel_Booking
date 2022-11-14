<html>
  <head>
    <title>Payment success</title>
</head>
<body>
<form method="get" action="pay5.php" class="bordered">
     <p align="center" style="color:darkgreen"><b><font size="4">PAYMENT RECEIVED!!!</font></b></p>
     <p align="center"><b><font size="2">Your data saved successfully, head back to previous page!</font></b></p></font></b></p>
     <p align="center"><b><font size="4">ROOM BOOKED</font></b></p>
    <p font size="3"><b>Name: </b><?php echo $_POST['names'] ?><br>
     <b>Email ID: </b><?php echo $_POST['email'] ?></p>
     <p align="center"><b><font size="4">BOOKING DETAILS</font></b></p>
     <p font size="3"><b>DATE:</b><br>
    <b>From:</b> <?php echo $_POST['fromdate'] ?><b>
     To: </b><?php echo $_POST['todate'] ?></p>
     <p font size="3"><b>TIME:</b><br>
    <b>From:</b> <?php echo $_POST['intime'] ?><b>
     To: </b><?php echo $_POST['outtime'] ?></p>
     <p align="center"><b><font size="4">ROOM DETAILS</font></b></p>
     <p font size="3"><b>Persons: </b><?php echo $_POST['select'] ?><br>
    <b>No.of rooms:</b> <?php echo $_POST['select1'] ?><b><br>
     Amount Payed: </b><?php echo $_POST['select2'] ?></p>
</form>
<style>
  .bordered {
    width: 350px;
    height: 400px;
    padding: 20px;
    border: 10px solid red;
    margin:80px 500px;
    }
</style>
</html>
<?php



if(isset($_POST['submit'])){

 
$servername = "localhost";
$mysql_user="root";
$password = "";
$dbname = "paydata";

$names=$_POST['names'];
$email=$_POST['email'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$intime=$_POST['intime'];
$outtime=$_POST['outtime'];
$person=$_POST['select'];
$roomcost=$_POST['select2'];
$roomnum=$_POST['select1'];


// Create connection
$conn = mysqli_connect($servername, $mysql_user, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO stayinfo
VALUES ('$names', '$email', '$fromdate', '$todate', '$intime', '$outtime',  '$person', '$roomcost', '$roomnum')";

if (mysqli_query($conn, $sql)) {
  echo "</br>";

} else {
  echo "Contact Admin! Sorry for inconvinience:( Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo("<h2>Click here to clean <a href = 'log3.php' title = 'Logout'>Session.</h2>");
mysqli_close($conn);
}

?>
<HTML> 
    <style>
        body{
            background-color:white;
        }
    </style>
</HTML>