<?php

	$connection = mysqli_connect("localhost", "root", "","paydata");
	if (mysqli_connect_errno())
	{
		echo "Database connection failed.";
	}

	$query = "SELECT roomcost, roomnum FROM stayinfo";
	$result = mysqli_query($connection, $query);
	
	if ($result)
	{
		$c250 = 5;
		$c450 = 5;
		$c500 = 2;
		$c1000 = 5;
		$c2000 = 5;
		$c5000 = 5;

		$row = mysqli_num_rows($result);
        while($row = $result->fetch_assoc()) {
            echo "<h2>".$row["roomcost"]."</h2>";
			echo "<h2>".$row["roomnum"]."</h2>";
			if($row["roomcost"]==500)
			{
				$c500 = $c500 - $row["roomnum"];
				
				if($c500<0)
				{
					echo "<h2>"."Sorry Room Not available"."</h2>";
				}

				else
				{
					echo "<h2>".$c500."</h2>";
				}
			}
			
        }         
		
	}

	function cnt() {
		while($row = $result->fetch_assoc()) {
            // echo "<h2>".$row["roomcost"]."</h2>";
			// echo "<h2>".$row["roomnum"]."</h2>";
			if($row["roomcost"]==500)
			{
				$c500 = $c500 - $row["roomnum"];			
				if($c500<0)
				{
					$c500
				}
			}
			return $c500;
        } 
	}

	// Connection close
	mysqli_close($connection);
?>
