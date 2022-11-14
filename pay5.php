<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>PAYMENT FORM</title>
  <link rel="stylesheet" href="pay.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
  <link rel="stylesheet" href="paymentstyle.css">
</head>

<body background="payment.jpg">

  <div class="container">
    <div class="container-time">
      <h2 class="heading">ROOM BOOKING</h2>
      <h3 class="heading-days">PAYMENT FORM</h3>
      <h4>BOOKING OPEN:</h4>
      <p>8am - 9pm (Monday-Friday)</p>
      <p>11am - 10:30pm (Saturday-Sunday)</p>
      <h3 class="heading-days">BOOK YOU ROOMS NOW!!!</h3>
      <br><br>
      <hr>
      <h3>CONTACT US:</h3>
      <h4 class="heading-phone">Email: @gmail.com</h4>
      <h4 class="heading-phone">Contact Number: 8866728905</h4>
    </div>

    <div class="container-form">
      <form action="jpay.php" method="post">
        <h2 class="Heading heading-yellow" align="center">ENTER YOUR INFORMATION</h2>
        <div class="form-field">
          <p>Name: </p>
          <input type="text" placeholder="Your Name" size="35" required name="names" id="names">
        </div>
        <div class="form-field">
          <p>Email ID: </p>
          <input type="email" placeholder="Your email" size="35" required name="email" id="email">
        </div>
        <h4 align="center">BOOKING DETAILS</h4>
        <div class="form-field">
          <p>From</p>
          <input type="date" id="fromdate" name="fromdate" required><br>
          <p>To</p>
          <input type="date" id="todate" name="todate" required>
        </div>
        <div class="form-field">
          <p>Time: </p>
          <p>From</p>
          <input type="time" id="intime" name="intime">
          <p>To</p>
          <input type="time" id="outtime" name="outtime">
        </div>
        <div class="form-field">
          <p>How many people?</p>
          <select name="select" id="pers" required>
            <option value="1">1 person</option>
            <option value="2">2 persons</option>
            <option value="3">4 persons</option>
            <option value="4">6 persons</option>
          </select>
        </div>
        <div class="form-field">
          <p>Select room</p>
          <select name="select2" id="se1" required>
            <option value="0">Select Room</option>
            <option value="250">Delux Room with a Single cot- Rs 250</option>
            <option value="500">Delux rooms with 2 single cots-Rs 500</option>
            <option value="450">2 single cots-Rs 450</option>
            <option value="1000">Delux Room with Queen Size bed -Rs 1000</option>
            <option value="2000">Master Bedroom with Kingsize Beds-Rs 2000</option>
            <option value="5000">Delux Room with King Size bed-Rs 5000</option>
          </select>
        </div>
        <div class="form-field">
          <p>How many rooms?</p>
          <select name="select1" id="se2" required>
            <option value="1">1</option>
            <option value="2">2 </option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
        <!---<button class="btn" type="submit" name="submit">SUBMIT DETAILS</button>-->


        <button class="btn" onclick="calc()">CALCULATE AMOUNT</button>

        <p>The amount to be paid is: </p>
        <p id="p1" style="color:green"> </p>
        <h2>Enter card details: </h2>
        <input id="cardname" type="text" placeholder="Name" required name="cardname">
        <input type="text" name="cardnum" id="cardnum" placeholder="0000 0000 0000 0000"
          pattern="[0-9]{4}\s[0-9]{4}\s[0-9]{4}\s[0-9]{4}" required>
        <input type="month" placeholder="Expiry Date" required name="expyear">
        <input type="user" name="cvv" id="cvv" placeholder="CVV" pattern="[0-9]{3}" required>



        <button class="btn" type="submit" name="submit">PAY</button>


      </form>
      <br>
      <br>


      <script type="text/javascript">
        function calc() {
          var date1 = new Date(document.getElementById('fromdate').value);
          var date2 = new Date(document.getElementById('todate').value);
          var d = date2 - date1;
          var days = d / 1000 / 60 / 60 / 24;
          var a = document.getElementById("se1");
          var selectroom = a.value;
          var b = document.getElementById("se2");
          var no_of_room = b.value;
          var pay = days * selectroom * no_of_room;
          document.getElementById("p1").innerHTML = pay;
        }
        function pay() {

          document.getElementById("p2").innerHTML = "Payment Done";
        }
      </script>



      <!---
        <div class="main">
            <div class="content"> 
                <h1>Payment Details</h1>
                <form action="jpay.php" method="post" name="cardform" action="">
                    <input id="cardname" type="text" placeholder="Name" required name="cardname">
                    <input type="text" name="cardnum" id="cardnum" placeholder="0000 0000 0000 0000" pattern="[0-9]{4}\s[0-9]{4}\s[0-9]{4}\s[0-9]{4}" required >
                    <input type="month" placeholder="Expiry Date" required name="expyear">
                    <input type="user"  name="cvv" id="cvv" placeholder="CVV" pattern="[0-9]{3}"required>
                    <button class="btn" type="submit" name="sub">PAY</button> </form>
                </form><br><br><br>
                    
   
   </div>
  </div>-->
</body>

</html>