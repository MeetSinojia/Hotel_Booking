<?php
    
    // servername => localhost
    // username => root
    // password => empty
    // database name => sample1
    session_start();
    $msg = "";
    if(isset($_POST['submit']) && $_POST['email']!="" && $_POST['password']!=""){
    $conn = mysqli_connect("localhost:3307", "root", "", "sample1");
    
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
    
    // Taking all 5 values from the form data(input)
    
    $email = $_REQUEST['email'];
    $password= $_REQUEST['password'];
    
    $sql = "SELECT * FROM profile1 WHERE email = '$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
    {
        /*$_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['email'] = $_POST['email'];*/
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
        echo $_SESSION['id'];
        //header('location:profile.php');// redirect to home page
        header('location:index2.html');
        exit();
    }
    else
    {
        /*echo("Sorry invalid username or password!");
        echo('<br>');
        echo("Check ur username or password again!!!");*/
        echo("<script type='text/javascript'>alert('username or password is invalid');</script>");
        /*echo("<script type='text/javascript'>
        document.getElementById("res1").innerHTML='Username or password is invalid!';
        </script>");*/
    }
    echo("<h2>Click here to clean <a href = 'log2.php' title = 'Logout'>Session.</h2>");
    mysqli_close($conn);
    }
?>