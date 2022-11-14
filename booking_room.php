<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Room</title>
  <link rel="stylesheet" href="booking_room.css">
  <link rel="stylesheet" type="text/css" href="home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<?php

function tot($temp) {
  $connection = mysqli_connect("localhost", "root", "","room");
  if (mysqli_connect_errno())
  {
    echo "Database connection failed.";
  }

  $query = "SELECT * FROM room";
  $result = mysqli_query($connection, $query);
  
  while($row = $result->fetch_assoc()) {
    if($row["room"]==250)
    {
      $c250 = $row["total"];			
    }
    if($row["room"]==500)
    {
      $c500 = $row["total"];			
    }
    if($row["room"]==450)
    {
      $c450 = $row["total"];			
    }
    if($row["room"]==1000)
    {
      $c1000 = $row["total"];			
    }
    if($row["room"]==2000)
    {
      $c2000 = $row["total"];			
    }
    if($row["room"]==5000)
    {
      $c5000 = $row["total"];			
    }
  }

  if($temp==250)
  {
    echo $c250;
  }
  if($temp==450)
  {
    echo $c450;
  }
  if($temp==500)
  {
    echo $c500;
  }
  if($temp==1000)
  {
    echo $c1000;
  }
  if($temp==2000)
  {
    echo $c2000;
  }
  if($temp==5000)
  {
    echo $c5000;
  }

}

	function cnt($temp) {
    $connection = mysqli_connect("localhost", "root", "","room");
    if (mysqli_connect_errno())
    {
      echo "Database connection failed.";
    }

  $query = "SELECT * FROM room";
  $result = mysqli_query($connection, $query);
    while($row = $result->fetch_assoc()) {
      if($row["room"]==250)
      {
        $c250 = $row["total"];			
      }
      if($row["room"]==500)
      {
        $c500 = $row["total"];			
      }
      if($row["room"]==450)
      {
        $c450 = $row["total"];			
      }
      if($row["room"]==1000)
      {
        $c1000 = $row["total"];			
      }
      if($row["room"]==2000)
      {
        $c2000 = $row["total"];			
      }
      if($row["room"]==5000)
      {
        $c5000 = $row["total"];			
      }
    }

    $connection = mysqli_connect("localhost", "root", "","paydata");
    if (mysqli_connect_errno())
    {
      echo "Database connection failed.";
    }
  
    $query = "SELECT roomcost, roomnum FROM stayinfo";
    $result = mysqli_query($connection, $query);
    
		while($row = $result->fetch_assoc()) {
      if($row["roomcost"]==250)
      {
          $c250 = $c250 - $row["roomnum"];			
          if($c250<0)
          {
            $c250=0;
            break;
          }
      }

		  if($row["roomcost"]==450)
		  {
				  $c450 = $c450 - $row["roomnum"];			
				  if($c450<0)
				  {
					  $c450=0;
            break;
				  }
		  }

      if($row["roomcost"]==500)
		  {
				  $c500 = $c500 - $row["roomnum"];			
				  if($c500<0)
				  {
					  $c500=0;
            break;
				  }
		  }

      if($row["roomcost"]==1000)
		  {
				  $c1000 = $c1000 - $row["roomnum"];			
				  if($c1000<0)
				  {
					  $c1000=0;
            break;
				  }
		  }

      if($row["roomcost"]==2000)
		  {
				  $c2000 = $c2000 - $row["roomnum"];			
				  if($c2000<0)
				  {
					  $c2000=0;
            break;
				  }
		  }

      if($row["roomcost"]==5000)
		  {
				  $c5000 = $c5000 - $row["roomnum"];			
				  if($c5000<0)
				  {
					  $c5000=0;
            break;
				  }
		  }
    } 

    if($temp==250)
    {
      echo $c250;
    }
    if($temp==450)
    {
      echo $c450;
    }
    if($temp==500)
    {
      echo $c500;
    }
    if($temp==1000)
    {
      echo $c1000;
    }
    if($temp==2000)
    {
      echo $c2000;
    }
    if($temp==5000)
    {
      echo $c5000;
    }

	}
?>


<body>
  <nav>
    <ul>
      <li><img src="images/favicon.png" width="80" height="70"></li>
      <li><span><b>Staybnb Resort<br></b><span></li>
    </ul>
  </nav>
  <div class="container">

    <div class="list-container">
      <div class="left-col">
        <h1 align="center">
          <font color="white">BOOK YOUR ROOMS NOW!!!</font>
        </h1>
        <div class="house">
          <div class="house-image">
            <img src="images/Room1.jfif">
          </div>
          <div class="house-info">
            <h1>Delux Room with a Single cot</h1>
            <p>Non A/C</p>
            <p>Kitchen | Living Room | 2 Bathrooms | Balcony</p><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <div class="house-price">
              <h3>Total Room: <?php tot(250) ?></h3>
              <h3>Avilable Room: <?php cnt(250) ?></h3>
              <p>1 person</p>
              <h4 id="pay1">Rs.250 <span> / day</span></h4>

            </div>
          </div>
        </div><br>
        <div class="house">
          <div class="house-image">
            <img src="images/Room2.jfif">
          </div>
          <div class="house-info">
            <h1>Delux rooms with 2 single cots</h1>
            <p>A/C </p>
            <p>Balcony | Living Room | 1 Bathrooms </p><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <div class="house-price">
              <h3>Total Room:<?php tot(500) ?></h3>
              <h3>Avilable Room:
                <?php cnt(500) ?>
              </h3>
              <p>2 persons</p>
              <h4>Rs.500<span> / day</span></h4>
            </div>
          </div>
        </div><br>
        <div class="house">
          <div class="house-image">
            <img src="images/Room3.jfif">
          </div>
          <div class="house-info">
            <h1>2 single cots </h1>
            <p>Non A/C</p><br>
            <p>Kitchen |2 Bathrooms | Balcony</p><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <div class="house-price">
              <h3>Total Room:<?php tot(450) ?></h3>
              <h3>Avilable Room:<?php cnt(450) ?></h3>
              <p>2 persons</p>
              <h4>Rs.450 <span> / day</span></h4>
            </div>
          </div>
        </div><br>
        <div class="house">
          <div class="house-image">
            <img src="images/Room4.jpg">
          </div>
          <div class="house-info">
            <p>Awesome Side view</p>
            <h2>Delux Room with Queen Size bed </h2>
            <p>A/C | Living Room | 2 Bathrooms | Balcony</p><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <div class="house-price">
              <h3>Total Room:<?php tot(1000) ?></h3>
              <h3>Avilable Room:<?php cnt(1000) ?></h3>
              <p>4 persons</p>
              <h4>Rs.1000 <span> / day</span></h4>
            </div>
          </div>
        </div><br>
        <div class="house">
          <div class="house-image">
            <img src="images/Room.jfif">
          </div>
          <div class="house-info">
            <p>Sea view with enlargeed Private terrace</p>
            <h2>Master Bedroom with Kingsize Beds</h2>
            <p>A/C | Living Room | 2 Bathrooms | Balcony</p><br><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <div class="house-price">
              <h3>Total Room:<?php tot(2000) ?></h3>
              <h3>Avilable Room:<?php cnt(2000) ?></h3>
              <p>4 persons</p>
              <h4>Rs.2000 <span> / day</span></h4>
            </div>
          </div>
        </div><br>
        <div class="house">
          <div class="house-image">
            <img src="images/Room5.jpg">
          </div>
          <div class="house-info">
            <p>Near Swimming pool</p>
            <h2>Delux Room with King Size bed</h2>
            <p>A/C | Living Room | 2 Bathrooms | Balcony | Dinning | Kitchen</p><br><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <div class="house-price">
              <h3>Total Room:<?php tot(5000) ?></h3>
              <h3>Avilable Room:<?php cnt(5000) ?></h3>
              <p>6 persons</p>
              <h4>Rs.5000 <span> / day</span></h4>
            </div>
          </div>
        </div>
        <br>
        <div class="house-price">
          <a href="pay5.php" target="_blank">
            <center><button class="btnbtn">
                <font size="20px">BOOK NOW</font>
              </button></center>
          </a>
        </div>
      </div>
      <div class="right-col">
        <div class="sidebar">
          <h2>
            <font color="white">Room Locations</font>
          </h2>
          <h3>
            <font color="white">Facilities</font>
          </h3>
          <div class="filter">
            <p>Near Swimming Pool</p>
          </div>
          <div class="filter">
            <p>Near Gym</p>
          </div>
          <div class="filter">
            <p>Sea view</p>
          </div>

          <h3>
            <font color="white">Room Features</font>
          </h3>
          <div class="filter">
            <p>Air Conditioning</p>
          </div>
          <div class="filter">
            <p>Dinnig Room</p>
          </div>
          <div class="filter">
            <p>Balcony</p>
          </div>
          <div class="filter">
            <p>Kitchen</p>
          </div>
          <div class="filter">
            <p>House Gardern</p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
</body>

</html>