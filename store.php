<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
    <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
    <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
	
</head>
<style>
</style>
<body>
	<center>
	<?php

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["photo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
        if(isset($_POST["submit_photo"])) {
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        } 
		else {
        echo "File is not an image.";
        $uploadOk = 0;
        }
       }

// Check if file already exists
       if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
       }

// Check file size
       if ($_FILES["photo"]["size"] > 500000) {
       echo "Sorry, your file is too large.";
       $uploadOk = 0;
      }

// Allow certain file formats
     if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
     && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
  echo "Sorry, your photo was not uploaded.";
// if everything is ok, try to upload file
   } else {
  if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
    echo "The photo ". htmlspecialchars( basename( $_FILES["photo"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your photo.";
  }
}

		// servername => localhost
		// username => root
		// password => empty
		// database name => sample1
		if(isset($_POST["submit"])){
		$conn = mysqli_connect("localhost", "root", "", "sample1");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$fname = $_REQUEST['fname'];
		$lname = $_REQUEST['lname'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$uname = $_REQUEST['uname'];
		$password= $_REQUEST['password'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO profile1 (firstname,lastname,email,phone,username,password) VALUES('$fname',
			'$lname','$email','$phone','$uname','$password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h1 class='site-header__title' data-lead-id='site-header-title'>WELCOME!</h1>"."<br>"
				."<p class='main-content__body' data-lead-id='main-content-body'>$fname $lname</p>"."<br>"."<p class='main-content__body' data-lead-id='main-content-body'>You have registered successfully!!!</p>"."<br>"
				. "<p class='main-content__body' data-lead-id='main-content-body'>Continue now by signing in</p>";

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
	}
		?>
		
	</center>
</body>

</html>