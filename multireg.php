
<!DOCTYPE HTML>
<?php                    
    if (isset($_POST["Login"])) {
        $connection = new mysqli("localhost", "root", "", "music3");

		$user = $connection->real_escape_string($_POST["user"]);  		
		$pass = sha1($connection->real_escape_string($_POST["Pass"]));  				
		$email = $connection->real_escape_string($_POST["email"]);  
		$usertype = $connection->real_escape_string($_POST["usertype"]); 
			
		$data = $connection->query("INSERT INTO login (username, password, email, usertype) VALUES ('$user', '$pass', '$email', '$usertype')");

	
		if($usertype=="admin"){
			?>
			<script type="text/javascript">
			window.location.href="admin_hom.php"</script>
			<?php
		}else if($usertype="User"){
			?>
			<script type="text/javascript">
			window.location.href="login.php"</script>
		<?php
		}
	
    
	}	                 
?>
<html>
<head>
<title>Sign up page</title>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 


<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<script src="js/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="wthree-dot">
	<h1 style="color:black">Create a new account</h1>
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
							<h4>Sign Up with</h4>
						</div>
						<div class="agileinfo-social-grids">
							<ul>
								<a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
								<a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
								<a href="https://www.instagram.com""><i class="fa fa-instagram"></i></a>
								<a href="https://www.linkedin.com"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								
							</ul>
						</div>
						<div class="agile-signin">
							<h4>Already have an account? <a href="login.php">Sign In</a></h4>
						</div>
					</div>
				</div>
				<div class="content-main">
					<div class="w3ls-subscribe">
						<h4>New to beatPods?</h4>
						
						 <!-- Form starts from here-->
						<form action="multireg.php" method="post" onsubmit='return formValidation()'><br><p id="head"></p><br> 
							<input type="text"  placeholder="Username" id="firstname" name="user" required="">
							 <p id="firstname"></p> 
							
							
							<input type="email"  name="email" placeholder="Email" id="email" required="">
							  <!--This segment displays the validation rule for email--> 
							
							<input type="password" name="Pass" placeholder="Password" id="psw" name="psw" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Please include at least 1 uppercase character, 1 lowercase character, 1 number and at least 8 characters." required="">
                         	
							<input type="password" name="Pass" placeholder="Confirm Password" id="cpsw" name="cpsw" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Please include at least 1 uppercase character, 1 lowercase character, 1 numberand at least 8 characters." required="">
                         	
							
							
							<input type="email" name="eemail" placeholder="Recovery Email" id="rcemail" required="">
							
							
							<h4>Select User Type:</h4><select name="usertype">
								<option value='User'>User</option>
								<option value='admin'>Admin</option>
								</select>
								<br><br>
								
							<input type="submit" name= "Login" id="submit" value="Login">&nbsp&nbsp
							
.
							<input type="submit" value="Cancel"  onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"></button>
							
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

<!----------form validation----------->
function formValidation(){ 
 
    // Make quick references to our fields     
	var firstname =  document.getElementById('firstname'); 
	var lastname =  document.getElementById('lastname'); 
	
	var email =  document.getElementById('email');
	var rcemail =  document.getElementById('rcemail');
	
	<!--------password validation----------------->
	var myInput = document.getElementById("psw");
	var letter = document.getElementById("letter");
	var capital = document.getElementById("capital");
	var number = document.getElementById("number");
	var length = document.getElementById("length");

	   //  to check empty form fields. 
     if(firstname.value.length == 0){         document.getElementById('head').innerText = "* All fields are mandatory *"; 
	 //this segment displays the validation rule for all fields        
	 firstname.focus();        
	 return false;    
	 }         
	 // Check each input in the order that it appears in the form!      
	 if(inputAlphabet(firstname, "* For your name please use alphabets only *"))
	 {                 
		             
		if(emailValidation(email, "* Please enter a valid email address *"))
		{                        
		                                
		return true;                        
		}                  
		               
		           
		         
		   
		}               
		return false;    
		} 
 

 
//function that checks whether input text is an alphabetic character or not. 
 
function inputAlphabet(inputtext, alertMsg)
{
     var alphaExp = /^[a-zA-Z]+$/;     
	 if(inputtext.value.match(alphaExp))
	 {       
	 return true;    
	 }
	 else
	 {
	 document.getElementById('firstname').innerText = alertMsg;
	 //this segment displays the validation rule for name       
	 //alert(alertMsg);        

	 inputtext.focus();        
	 return false;    
	 }
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
									<!--banner Slider starts Here-->
</body>
</html>