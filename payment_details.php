<?php
// Session starts here.
session_start();
?><!DOCTYPE HTML>

<html>

<head>

<link rel="stylesheet" type="text/css" href="Styles/payment_details.css">

</head>

<body class="body">

    <?php //Linking the configuration file
require 'payment_config.php';
?>
    
<div id="navbar">

  <div class="header-right">
    <a href="#home">Home</a>
    <a href="#albums">Albums</a>
    <a href="#comings">Coming Soon</a>
    <a href="#uploads">Uploads</a>
    <a href="#about">About</a>
      
      <div class="image1">
                  <a href="#">
          <span class="glyphicon glyphicon-shopping-cart" ></span>
        </a>
          
                                    <a href="#">
          <span class="glyphicon glyphicon-bell"></span>
        </a>
          
      </div>
      
    </div>
    
    <script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("navbar");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
    
    </div><br><br><br>

<div class="row">
  <div class="col-50">
    <div class="container" style="margin-left:30%;margin-right:30%;background-color:black">
        <div class="row">

          <div class="col-50">
              <h2><span style="color:white">Payment</span></h2>
              <span style="color:red">
             <!---- Initializing Session for errors --->
            <?php
            if (!empty($_SESSION['error'])) {
            echo $_SESSION['error'];
 
            }
            ?>
              </span>  
              
              <form action="payment_validation.php" method="post">
			<label for="email"><i class="fa fa-envelope"></i>Email</label>
            <input type="text" id="email" name="email" placeholder="aa@example.com" required>
            <label for="cname">Pay with</label>
              <input type="radio" name="type" value="credit"> <span style="color:white">Credit card</span><br>
              <input type="radio" name="type" value="debit"><span style="color:white"> Debit card</span><br>
			<br>
            <label for="ccnum">Credit/Debit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
                  <select name="month_id" style="  width:100%;margin-bottom: 20px;padding:12px;border: 1px solid #ccc;border-radius: 3px;">
		      <option value="pick" disabled selected>pick date</option>
		    <?php
		    $sql1 = mysqli_query($conn, "SELECT month From Month");
		    $row = mysqli_num_rows($sql1);
		    while ($row = mysqli_fetch_array($sql1))
		    {
			 echo "<option value='". $row['month'] ."'>" .$row['month'] ."</option>" ;
		    }
		    ?>
		      </select>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <select name="year_id" style="  width:100%;margin-bottom: 20px;padding:12px;border: 1px solid #ccc;border-radius: 3px;">
		          <option value="pick" width: 100%  disabled selected>pick year</option>
		      <?php
		      $sql2 = mysqli_query($conn, "SELECT year From Year");
		      $row = mysqli_num_rows($sql2);
		      while ($row = mysqli_fetch_array($sql2))
		      {
			     echo "<option value='". $row['year'] ."'>" .$row['year'] ."</option>" ;
		      }
		      ?>
		</select>
                  
                  
              </div>
              <div class="col-50">
                <label for="cvv">CVV/CVC</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
                 <input type="submit" style="background-color:#FF4500;width:200px;margin-left: 40%;" value="Confirm and Pay" class="btn " name="btnSubmit">
            </div>
              </form>
          </div>
            
        </div>
    </div>
  </div>
      
  

<hr>
	
    <!--Footer-->
 	<footer  class="footer-distributed">

			<div align="center" class="footer-right">

				<a href="https://www.facebook.com/"><i class="faq faq-facebook"></i></a>
				<a href="https://www.twitter.com/"><i class="faq faq-twitter"></i></a>
				<a href="https://www.linkedin.com/"><i class="faq faq-linkedin"></i></a>
				<a href="https://www.github.com/"><i class="faq faq-github"></i></a>

			</div>
			
			

			<div align="center" class="footer-left">
				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Blog</a>
					·
					<a href="#">Pricing</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>
				</p>

				<p>beatPods &copy; 2018</p>
			</div>
			</div>

</footer>
 
</body>

</html>