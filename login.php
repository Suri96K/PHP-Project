
<?php
	/*session_start();

	if (isset($_SESSION["user"]) && isset($_SESSION["loggedIn"])) {
		header("Location: index.php");
		exit();
	}

	if (isset($_POST["logIn"])) {
		$connection = new mysqli("localhost", "root", "", "multiuserlogin");
		
		$user= $connection->real_escape_string($_POST["user"]);
		$pass = sha1($connection->real_escape_string($_POST["Pass"]));
		$data = $connection->query("SELECT user FROM multiuserlogin WHERE user='$user' AND pass='$Pass'");

		if ($data->num_rows > 0) {
			$_SESSION["user"] = $user;
			$_SESSION["loggedIn"] = 1;
			
			header("Location: index.php");
			exit();

		} else {
			
			echo "Please check your inputs!";
		}
	}*/
	session_start();
	
	if(isset($_SESSION["username"]) && isset($_SESSION["loggedIn"])){
		header("Location: index2.php");
		exit();
	}
	
	
	if (isset($_POST["Login"])) {
        $connection = new mysqli("localhost", "root", "", "music3");

		$user = $connection->real_escape_string($_POST["user"]);  		
		$pass = sha1($connection->real_escape_string($_POST["Pass"]));  				
		
		$data = $connection->query("SELECT username FROM login WHERE username='$user' AND password='$pass'");

		if(($data->num_rows)>0){
			$_SESSION["username"]=$user;
			$_SESSION["loggedIn"]=1;
			
			header ("Location: index2.php");
			exit();
		}else{
			echo "Please check your inputs";
		}
		
	}
	
	
?>		
<!DOCTYPE HTML>
<html>
<head>
<title>Sign In</title>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Trendy Signup Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!--Google Fonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<script src="js/jquery-1.11.1.min.js"></script>
<style>

</style>
</head>
<body>
<div class="wthree-dot">
	<h1 style="color:black">SIGN IN</h1>
	<div class="profile">
		<div class="wrap">
			<div class="wthree-grids">
				<div class="content-left">
					<div class="content-info">
					<img src="images1/nmm-logo.png" alt="logo" height="70" width="70">
						<h2>beatPods</h2>
						<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides callbacks callbacks1" id="slider4">
									<li>
										<div class="w3layouts-banner-info">
											<h3>Start 2018 on the right note with the best new releases of the year </h3>
											<p>Satisfy your diverse musical taste buds with the latest tracks</p>
										</div>
									</li>
									<li>
										<div class="w3layouts-banner-info">
											<h3>Listen to music on the go</h3>
											<p>Download latest music and purchase favourite albums</p>
										</div>
									</li>
								</ul>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="agileinfo-follow">
							<h4></h4>
						</div>
						
						<div class="agile-signin">
							<h4>Forgot your password? <a href="forgotPassword.php">Reset Password</a></h4>
						</div>
					</div>
				</div>
				<div class="content-main">
					<div class="w3ls-subscribe">
						<h4>Already a member?</h4>
						
						 <!-- Form starts from here-->
						<form action="login.php" method="post" onsubmit='return formValidation()'><br><p id="head"></p><br> 
							<input type="text" name="user" placeholder="Username" id="firstname"  required="">
							 <p id="firstname"></p> 
							
							<input type="password" name="Pass" placeholder="Password" id="psw"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least 
	  one number and one uppercase and lowercase letter, and at least 8 or more 
	  characters" required="">
                         	
							
							<input type="submit" id="submit" value="Login" name="Login">&nbsp &nbsp &nbsp
							
.
							<input type="submit" value="Cancel"  onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"></button>
							
							<div id="message">
  <h5 style="color:white">Password must contain the following:</h5>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
						</form>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
			
		</div>
	</div>
</div>
<script src="js/responsiveslides.min.js"></script>
									<script>
										// You can also use "$(window).load(function() {"
										$(function () {
										  // Slideshow 4
										  $("#slider4").responsiveSlides({
											auto: true,
											pager:true,
											nav:false,
											speed: 400,
											namespace: "callbacks",
											before: function () {
											  $('.events').append("<li>before event fired.</li>");
											},
											after: function () {
											  $('.events').append("<li>after event fired.</li>");
											}
										  });
									
										});
										
										
										// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
										
</script>
									
</body>
</html>