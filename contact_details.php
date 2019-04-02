<!DOCTYPE HTML>

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
              <h2><span style="color:white">Contact Us</span></h2>
              <span style="color:red">
              </span>  
              
              <form>
            <label for="name"><i class="fa fa-envelope"></i>Name</label>
            <input type="text" id="email" name="name" placeholder="John" required>
			<label for="email"><i class="fa fa-envelope"></i>Email</label>
            <input type="text" id="email" name="email" placeholder="aa@example.com" required>
            <label for="email"><i class="fa fa-envelope"></i>Subject</label>
            <input type="text" id="email" name="subject" placeholder="Subject" required>
            <label for="email"><i class="fa fa-envelope"></i>Message</label>
            <input style="" type="text" id="email" name="message" placeholder="Message" required>
            
              </div>
                 <input type="submit" style="background-color:#FF4500;width:200px;margin-left: 40%;" value="Submit" class="btn " name="btnSubmit">
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