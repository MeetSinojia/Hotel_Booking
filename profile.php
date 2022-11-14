<html>

<head>
    <title>create profile form</title>
    <link href="profile.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="header">

        <div>
            <center>
                <h2 style="padding-top:10px;font-family:'sans-serif;">CREATE PROFILE</h2>
            </center>
            <form method="POST" action="store.php" class="box" enctype="multipart/form-data">

                <input type="text" name="fname" id="fname" placeholder="Enter your First name">
                <br><br>
                <input type="text" name="lname" id="lname" placeholder="Enter your Last name">
                <br><br>
                <input type="email" name="email" id="email" placeholder="Enter your E-mail id">
                <br><br>
                <input type="number" name="phone" id="phone" placeholder="Enter your phone number">
                <br><br>
                <input type="text" name="uname" id="uname" placeholder="Enter a username">
                <br><br>
                <input type="password" name="password" id="password" placeholder="Enter a password">
                <br><br>
                <input type="file" name="photo" id="photo" placeholder="Upload ur photo here">
                <!--<input type="submit" value="Upload Your photo" name="submit_photo">-->
                <br><br>
                <button type="submit" value="submit" name="submit">Submit</button>

            </form>

        </div>

    </div>

</body>
</html>