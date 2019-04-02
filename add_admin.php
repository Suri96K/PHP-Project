<?php /*session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
{
    //echo "User Logged in, " . $_SESSION['username'] . "!";
	$namesession=$_SESSION['username'];
} 
else 
{
    echo "Please log in first to use the system.";
	header("location:login_index.php");
} */

	//including the database connection file
	include("connection.php");
	 	
?>


<html>
<head>	
	
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Add Genre</title>
	<link rel="stylesheet" type="text/css" href="styles/template.css">
	<link rel="stylesheet" type="text/css" href="styles/payment_details.css">
<style>




<!------button------>
input[type=text],[type=email],[type=tel],[type=password], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
   
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #FF4500;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width:160px;
    height:40px;
}

input[type=submit]:hover {
    background-color: #FFA07A;
}


</style>

</head>

<body class="body">
    
<!--header-->    
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
    </div>
	<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<div style="align:right; margin-right:100px;">
	<input type="submit"  class="button_text" type="submit" name="add" value="Back "  onclick="window.location='admin_home.php';"/>
	</div>
	<br/><br/>
	
	 
	
	
	
   <div class="row">
  <div class="col-50">
    <div class="container" style="margin-left:30%;margin-right:30%;background-color:black">
        <div class="row">

          <div class="col-50">
              <h2><span style="color:white">Create Admin Account</span></h2>
			  
	 <form id="form2" action = "add_admin_q.php" method="POST">
	
	<label for="UserRole"><b>User Type</b></label>
    <input type="text" id="UserRole" name="UserRole" value="admin" readonly required="required">

   
      
    <label for="fname">First name : </label>
    <input type="text" id="fname" name="fname" autofocus required placeholder="Enter firstname" required>

	<label for="lname">Last Name : </label>
    <input type="text" id="lname" name="lname" autofocus required placeholder="Enter last name" required>
	
	<label for="lname">Username : </label>
    <input type="text" id="username" name="username" placeholder="sam123" required>
	
	<label for="email" >Email Address :</label>
	<input name="EmailAddress" type="email" required="required" id="EmailAddress" placeholder="sam123@gmail.com" required>
	
	<label for ="password">Password : </label>
	<input name="Password" type="password" required="required" id="Password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Please include at least 1 uppercase character, 1 lowercase character, 1 number and at least 8 characters." required="">
                         	
	
	<label for="phone">Contact No :</label>
	<input name="ContactNo" type="tel" required="required" id="ContactNo"  maxlength="10">
	
    
	
	<div align="center">
	<input id="saveForm" class="button_text" type="submit" name="submit" value="Add" />
	</div>
  </form>
  </div>
	 </div>
            
        </div>
    </div>
  
<hr>
	
	
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
			

</footer>
 
	
</body>

</html>
