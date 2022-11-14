<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register/Login-New</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#" id="f1">
                <div class="social-container">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-google"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
                <h1>Create Account</h1>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" />
                <input type="email" placeholder="Email" id="em"/>
                <p id="res2"></p>
                <input type="password" placeholder="Enter a 12 digit Password" id="pwd" />
                <p id="res3"></p>
                <button type="submit" onclick="validatesu()">Sign Up</button>
              
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="signin.php" id="f2" method="POST">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-google"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
                <span>or use your account</span>
                <input type="email" placeholder="Email" id="em1" name="email" />
                <p id="res"></p>
                <input type="password" placeholder="Enter a 12 digit Password" name="password" id="pwd1" />
                <p id="res1"></p>
                <a href="#">Forgot your password?</a>
                <button type="submit" name="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp" name="signup">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="loginscript.js"></script>
    <script type="text/javascript">
        function validatesu() {
            var user=document.getElementById("em").value;
            var reg1 = /^[A-Za-z0-9]*\@[A-Za-z]*\.[a-z]{3}$/;
            var user1=document.getElementById("pwd").value;
            var reg2=/^[0-9]{12}$/;
            var flag=0;
            var e = document.getElementById("f1"); //Get the element
           
            if(reg1.test(user)==true && reg2.test(user1)==true)
            {
                
                 
                 window.location.replace("https://www.geeksforgeeks.org/");
                 document.getElementById("res2").style="color:green;font-weight:bolder";
                 document.getElementById("res3").style="color:green;font-weight:bolder";
                 document.getElementById("res2").innerHTML="Email id is valid";
                 document.getElementById("res3").innerHTML="Password is valid";
                 e.setAttribute("action", "profile.php"); 
               
                 
            }
            else if(reg1.test(user)==true)
            {
                document.getElementById("res2").style="color:green;font-weight:bolder";
                 document.getElementById("res3").style="color:red;font-weight:bolder";
               
                document.getElementById("res2").innerHTML="Email id is valid";
                document.getElementById("res3").innerHTML="Password is not  valid";
                e.setAttribute("action", "#"); 
            }
            else if(reg2.test(user1)==true)
            {
                document.getElementById("res2").style="color:red;font-weight:bolder";
                 document.getElementById("res3").style="color:green;font-weight:bolder";
                document.getElementById("res2").innerHTML="Email id is not valid";
                document.getElementById("res3").innerHTML="Password is valid";
                e.setAttribute("action", "#"); 
            }
            else
            {
                document.getElementById("res2").style="color:red;font-weight:bolder";
                 document.getElementById("res3").style="color:red;font-weight:bolder";
                document.getElementById("res2").innerHTML="Email id is not valid";
                document.getElementById("res3").innerHTML="Password is not valid";
                e.setAttribute("action", "#"); 

            }
            
        }
        function validatesi() {
            var user=document.getElementById("em1").value;
            var reg3 = /^[A-Za-z0-9]*\@[A-Za-z]*\.[A-za-z]{3}$/;  ///^[A-Za-z]*\@[A-Za-z]*\.[a-z]{3}$/;
            var user1=document.getElementById("pwd1").value;
            var reg4=/^[0-9]{12}$/;
            if(reg3.test(user)==true && reg4.test(user1)==true)
            {
                 document.getElementById("res").style="color:green;font-weight:bolder";
                 document.getElementById("res1").style="color:green;font-weight:bolder";
                 document.getElementById("res").innerHTML="Email id is valid";
                 document.getElementById("res1").innerHTML="Password is valid";
            }
            else if(reg3.test(user)==true)
            {
                document.getElementById("res").style="color:green;font-weight:bolder";
                 document.getElementById("res1").style="color:red;font-weight:bolder";
               
                document.getElementById("res").innerHTML="Email id is valid";
                document.getElementById("res1").innerHTML="Password is not  valid";
            }
            else if(reg4.test(user1)==true)
            {
                document.getElementById("res").style="color:red;font-weight:bolder";
                 document.getElementById("res1").style="color:green;font-weight:bolder";
                document.getElementById("res").innerHTML="Email id is not valid";
                document.getElementById("res1").innerHTML="Password is valid";
            }
            else
            {
                document.getElementById("res").style="color:red;font-weight:bolder";
                 document.getElementById("res1").style="color:red;font-weight:bolder";
                document.getElementById("res").innerHTML="Email id is not valid";
                document.getElementById("res1").innerHTML="Password is not valid";

            }
        }
        
        
    </script>
    

</body>