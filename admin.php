<!DOCTYPE html>
<html>

<head>
    <title>Admin Page</title>
    <link rel="shortcut icon" type="image/x-icon" href="" />
    <link rel="stylesheet" type="text/css" href="style1.css" />
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;
        }

        body {
            font-family: Helvetica;
            -webkit-font-smoothing: antialiased;
            background: #f1f3f6;

        }

        h2 {
            text-align: center;
            font-size: 28px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #324960;
            padding: 10px 0;
        }


        .navbar {
            display: flex;
            min-width: 800px;
            align-items: center;
            justify-content: space-between;
            background: #fff;
            padding: 0 20px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.8);
            border-radius: 20px;
            margin: 30px;
        }


        .navbar a {

            float: left;
            color: darkgray;
            text-align: center;
            padding: 20px 10px;
            text-decoration: none;
            font-size: 18px;
            transition: 0.3s;
        }

        .navbar a:hover {
            font-size: 20px;
            color: black;

        }

        .navbar .con-logo {
            width: 100px;
        }


        .navbar .con-btns {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .navbar button {
            padding: 12px 30px;
            color: #fff;
            background: #000;
            border: 0;
            outline: none;
            border-radius: 18px;
            cursor: pointer;
            margin-left: 10px;
        }

        .adduser {
            width: 380px;
            height: 390px;
            position: relative;
            margin: 5% auto;
            background: white;
            box-shadow: 0 0 10px gray;
            padding: 5px;
            border-radius: 30px;
            overflow: hidden;
        }

        .input-field {

            padding: 10px 10px;
            margin: 20px 50px;
            width: 70%;
            border-bottom: 1px solid #999;
            border-top: 0;
            border-right: 0;
            border-left: 0;
            background: transparent;
            outline: none;


        }

        .input-label {
            font-size: 20px;
            padding: 20px 20px;
            margin: 20px 25px;
            width: 50%;


        }

        /*        search box css*/
        form.search input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 80%;
            background: #f1f1f1;
        }

        form.search button {
            float: left;
            width: 20%;
            padding: 10px;
            background: #999;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;
        }

        form.search button:hover {
            background: #324960;
        }

        form.search::after {
            content: "";
            clear: both;
            display: table;
        }

        div {
            display: none;
        }

        div:target {
            display: block;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <p class="con-logo"> <img src="picture/hotel.png" width=40px height="30px"> </p>


        <a href="#room" role="tab" data-toggle="list" aria-controls="home">Room Booking</a>
        <a href="#user">User Details</a>
        <a href="#add">Add Rooms</a>


        <div class="con-btns">
            <button onclick="javascript:logout()">Logout</button>

        </div>
        <script>
            function logout() {
                location.href = "login_form.php";

            }

        </script>


    </div>
    <!--        ROOMS BOOKING LIST-->

    <div id="room">
        <center>
            <h2>ROOM BOOKING </h2>
        </center>

        <form class="search" method="post" style='float:right'>
            <input type="text" placeholder="Search.." name="name" />
            <button type="submit" name='room'><i class="fa fa-search"></i></button>
        </form>

        <table border=1 class="fl-table">
            <tr>
                <th>SR No</th>
                <th>Name</th>
                <th>email</th>
                <th>From Date</th>
                <th>To Date</th>
                <th>Checkin</th>
                <th>Checkout</th>
                <th>No. Person</th>
                <th>Room cost</th>
                <th>Room number</th>
            </tr>
            <?php
//        session_start();
        $count=0;
        $con=mysqli_connect('localhost','root','','paydata');
                  
if(isset($_POST['stayinfo'])){
    $name=$_POST['name'];
   
    $sql=" SELECT * FROM stayinfo WHERE Username like '%".$name."%' OR Name like '%".$name."%' OR Type like '%".$name."%'";
    $num=mysqli_query($con,$sql);
}
else{
     $sql="select * from stayinfo ";
    $num=mysqli_query($con,$sql);
}
        if(mysqli_num_rows($num)>0)
        {
        while($row=mysqli_fetch_assoc($num))
        {
        $count = $count+1;
        ?>

            <tr>
                <td>
                    <?php echo $count?>
                </td>
                <td>
                    <?php echo $row['names'];?>
                </td>
                <td>
                    <?php echo $row['email'];?>
                </td>
                <td>
                    <?php echo $row['fromdate'];?>
                </td>
                <td>
                    <?php echo $row['todate'];?>
                </td>
                <td>
                    <?php echo $row['intime'];?>
                </td>
                <td>
                    <?php echo $row['outtime'];?>
                </td>
                <td>
                    <?php echo $row['person'];?>
                </td>
                <td>
                    <?php echo $row['roomcost'];?>
                </td>
                <td>
                    <?php echo $row['roomnum'];?>
                </td>


                <td>


                    <?php  ?>
                    <form method="POST">
                        <input type='hidden' name='name' value='<?php echo $row[' name'] ?>'/>
                        <input type='hidden' name='email' value='<?php echo $row[' email'] ?>'/>
                        <input type='hidden' name='person' value='<?php echo $row[' person'] ?>'/>
                </td>
                <?php
        }  
    }
    ?>
        </table>
    </div>

    <div class="adduser" id='add'>

        <br>
        <center>
            <h1>ADD ROOMS</h1>
        </center><br><br>

        <form method='POST'>
            <label class='input-label'>Type of Room</label>
            <select class='input-field' for='type' name='Type'>
                <option value='250'> 250</option>
                <option value='450'> 450</option>
                <option value='500'> 500</option>
                <option value='1000'> 1000</option>
                <option value='2000'> 2000</option>
                <option value='5000'> 5000</option>
            </select>
            <label class='input-label'>Updated Number of rooms</label>
            <input type='phonenumber' name="NoRoom" class='input-field' placeholder="Type number" required><br><br>
            <form action="" method="post">
                <input class='btn' type='submit' name='update' value='update' />
            </form>
        </form>
    </div>

    <?php
$con=mysqli_connect('localhost','root','','room'); 
if (isset($_POST['update']) || isset($_POST['update']))
{
$id = $_POST['Type'];
$tot = $_POST['NoRoom'];
$query="UPDATE room
        SET total = $tot
        WHERE room=$id";
$data=mysqli_query($con,$query);

if($data)
{
echo"<script>window.alert('RECORD IS UPDATED IN THE DATABASE')</script>";
}

else
{
echo"<script>window.alert('FAILED TO UPDATE THE RECORD IN DATABASE')</script>";	
}
}
?>

    <div id="user">

        <form class="search" method="post" style='float:right'>
            <input type="text" placeholder="Search.." name="name" />
            <button type="submit" name='user'><i class="fa fa-search"></i></button>
        </form>

        <table border=1 class="fl-table">
            <tr>
                <th>Sno</th>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Action</th>
            </tr>
            <?php
          $count=0;
          $con=mysqli_connect('localhost','root','','sample1');

              
        $sql="SELECT * FROM profile1";
        $num=mysqli_query($con,$sql);

          if(mysqli_num_rows($num)>0)
          {
          while($row=mysqli_fetch_assoc($num))
          {
          $count = $count+1;
          ?>

            <tr>
                <td>
                    <?php echo $count?>
                </td>
                <td>
                    <?php echo $row['id'];?>
                </td>
                <td>
                    <?php echo $row['username'];?>
                </td>
                <td>
                    <?php echo $row['password'];?>
                </td>
                <td>
                    <?php echo $row['email'];?>
                </td>
                <td>
                    <?php echo $row['phone'];?>
                </td>
                <td>
                    <form action="" method="post">
                        <input type='hidden' name='id' value='<?php echo $row[' id'] ?>'/>
                        <input class='btn' type='submit' name='delete' value='Delete' />
                    </form>
                </td>
                <?php } ?>

            </tr>
        </table>
        <?php } ?>
    </div>
    <!-- <?php
$con=mysqli_connect('localhost','root','','sample1'); 
if (isset($_POST['delete']) || isset($_POST['delete']))
{
$id = $_POST['id'];
$query="DELETE FROM profile1 WHERE id =$id";
$data=mysqli_query($con,$query);

if($data)
{
echo"<script>window.alert('RECORD IS UPDATED IN THE DATABASE')</script>";
}

else
{
echo"<script>window.alert('FAILED TO UPDATE THE RECORD IN DATABASE')</script>";	
}
}
?> -->



</html>

</body>