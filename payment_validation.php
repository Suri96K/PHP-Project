    <?php //Linking the configuration file
require 'payment_config.php';
?>
<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (empty($_POST['email'])|| empty($_POST['cardnumber']) || empty($_POST['cvv'])){ 
 // Setting error message
$_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
 header("location:payment_details.php"); // Redirecting to first page 
	} else {
    if (preg_match("/^[0-9]{16}$/", $_POST['cardnumber'])){ 
        $contact= $_POST['cardnumber'];
    }else{	
	$_SESSION['error'] = "Invalid Credit/Debit card number.";
	header("location:payment_details.php");
    }
    
    if (preg_match("/^[0-9]{3}$/", $_POST['cvv'])){ 
    $contact= $_POST['cvv'];
    }else{	
	$_SESSION['error'] = "Invalid cvv number.";
	header("location:payment_details.php");
    }
	}
            if(isset($_POST["btnSubmit"]))
            {
	           $email = $_POST['email'];
	           $cardno = $_POST['cardnumber'];
	           $monthID = $_POST['month_id'];
	           $yearID = $_POST['year_id'];
	           $cvv = $_POST['cvv'];
	           
	           $sql3= "INSERT INTO payment
		      VALUES('','','$email','$cardno','$monthID','$yearID','$cvv')";
		
  	         if($conn->query($sql3))
		      {
			 
		      }
		      else
		      {
			   
		      }
  
            }



 mysqli_close($conn);


?>
<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="styles/payment_details.css" >
</head>
<body class="body">
    <div id="navbar">

  <div class="header-right">
    <a class="active" href="index.php">Home</a>
    <a href="#albums">Albums</a>
    <a href="#comings">Coming Soon</a>
    <a href="#uploads">Uploads</a>
    <a href="#about">About</a>
  </div>
      
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
</div> 
     <div class="container" style="margin-top:20%;margin-left:30%;margin-right:30%;background-color:black;color:white">
     <form>
    
         <h3 align="center">Transaction successfull</h3>
         <a href="index.php"><button onclick="index.php" class="button10 button11" style="background-color:#FF4500;border:none;color:white;padding: 10px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;margin-left: 5%;margin-top: 30px">Homepage <span class="glyphicon glyphicon-chevron-right" ></span></button> </a>
         
         <a href="www.google.com"><button onclick="veiw_track.php" class="button10 button11" style="background-color:#FF4500;border:none;color:white;padding: 10px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;margin-left: 45%;margin-top: 30px">Purchase details  <span class="glyphicon glyphicon-chevron-right" ></span></button></a>
    
    </form>
    </div>
    
</body>
</html>
