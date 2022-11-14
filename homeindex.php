<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>Staybnb Food Ordering System</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="homestyle.css">
<body class="b1">
<!-- Contact -->
<div id="checkout" class="chkout">CHECKOUT</div>
<center>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  <fieldset style="width:50%;" class="f1">
  <br>
  <label for="name" class="l1">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <input class="fbox" id="name" name="name" type="text" placeholder="Enter the Name">
  <br><br>
  <label for="phno" class="l1">Phone number:</label>
  <input class="fbox" id="phno" name="phno" type="text" placeholder="Enter the Phone number">
  <br><br>
  <label for="email" class="l1">E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <input class="fbox" id="email" name="email" type="text" placeholder="Enter the E-mail address">
  <br><br>
  <label for="badd" class="l1">Billing Address:</label>
  <input class="fbox" id="badd" name="badd" type="text" value="Stay bnb,Goa" readonly>
  <br><br>
  <label for="room" class="l1">Room No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <input class="fbox" id="room" name="room" type="text" placeholder="Enter the room number">
  <br><br>
  <label for="categ" class="l1">Choose the food category:</label>
  <select name="categ" id="categ" style="padding:10px;">
    <option value="pizza" >Pizza</option>
    <option value="pasta" >Pasta</option>
    <option value="starters" >Starters</option>
  </select>
  <br><br>
  <label for="fooditem" class="l1">Choose the food item:</label>
  <select name="fooditem" id="fooditem" style="padding:10px;">
    <option value="Margherita">Margherita</option>
    <option value="Formaggio">Formaggio</option>
    <option value="Meat Town">Meat Town</option>
    <option value="Lasagna">Lasagna</option>
    <option value="Ravioli">Ravioli</option>
    <option value="Spaghetti Classica">Spaghetti Classica</option>
    <option value="Todays Soup">Todays Soup</option>
    <option value="Bruschetta">Bruschetta</option>
    <option value="Garlic bread">Garlic bread</option>
  </select>
  
  <br><br>
  <label for="quantity" class="l1">Choose the quantity</label>
  <input type="text" id="quantity" name="quantity" style="padding:10px;" placeholder="Choose the quantity" >
  


  <br><br>
  
  <input type="submit" name="submit" class="fbox">

  <br>
  <br>
  </fieldset>
</form>
</center>
<br><br>

</body>
</html>

<?php

if(isset($_POST['submit'])) {
    $name=$_POST['name'];
    $phno=$_POST['phno'];
    $email=$_POST['email'];
    $badd=$_POST['badd'];
    $roomno=$_POST['room'];
    $category=$_POST['categ'];
    $fooditem=$_POST['fooditem'];
    $qty=$_POST['quantity'];
    
    //$cost=250;
    
    
        if($fooditem=="Margherita")
        {
            $cost=$qty*125;
            
           
        }
        else if($fooditem=="Formaggio")
        {
            $cost=$qty*250;
            
            
        }
        else if($fooditem=="Meat Town")
        {
            $cost=$qty*370;
            
            
        }
    
    
    
        else if($fooditem=="Lasagna")
        {
            $cost=$qty*470;
            
            
        }
        else if($fooditem="Ravioli")
        {
            $cost=$qty*178;
            
        }
        else if($fooditem="Spaghetti Classica")
        {
            $cost=$qty*290;
            
        }
        
    
    else  if($category=="starters")
    
        if($fooditem=="Todays Soup")
        {
            $cost=$qty*240;
           
        }
        else if($fooditem="Bruschetta")
        {
            $cost=$qty*360;
            
        }
        else if($fooditem="Garlic bread")
        {
            $cost=$qty*180;
            
        }
        
    
   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fooditems";
       
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "INSERT INTO foods 
    VALUES ('$name','$email','$roomno','$category','$fooditem','$qty','$cost')";
    
    if (mysqli_query($conn, $sql)) {
      echo "Order Received!!";
    } else {
      echo "Error in ordering " . $sql . "<br>" . mysqli_error($conn);
    }
      
    
    mysqli_close($conn);
    }
    
    
?>
