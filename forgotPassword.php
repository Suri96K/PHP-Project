<?php
    use PHPMailer\PHPMailer\PHPMailer;
    require_once "functions.php";

    if (isset($_POST['email'])) {
        $conn = new mysqli('localhost', 'root', '', 'music3');

        $email = $conn->real_escape_string($_POST['email']);

        $sql = $conn->query("SELECT id FROM login WHERE email='$email'");
        if ($sql->num_rows > 0) {

            $token = generateNewString();

	        $conn->query("UPDATE login SET token='$token', 
                      tokenExpire=DATE_ADD(NOW(), INTERVAL 5 MINUTE)
                      WHERE email='$email'
            ");

	        require_once "PHPMailer/PHPMailer.php";
	        require_once "PHPMailer/Exception.php";

	        $mail = new PHPMailer();
	        $mail->addAddress($email);
	        $mail->setFrom("IT18031980@my.sliit.lk", "R.Y");
	        $mail->Subject = "Reset Password";
	        $mail->isHTML(true);
	        $mail->Body = "
	            Hi,<br><br>
	            
	            In order to reset your password, please click on the link below:<br>
	            <a href='
	            localhost:81/ridmie/resetPassword.php?email=$email&token=$token
	            '> localhost:81/ridmie/resetPassword.php?email=$email&token=$token
	            '</a><br><br>
	            
	            Kind Regards,<br>
	            Ridmie Weerakotuwa.
	        ";

	        if ($mail->send())
			{
    	        exit(json_encode(array("status" => 1, "msg" => 'Please Check Your Email Inbox!')));
    	    }
			else
    	        exit(json_encode(array("status" => 0, "msg" => 'Something Wrong Just Happened! Please try again!')));
        } else
            exit(json_encode(array("status" => 0, "msg" => 'Please Check Your Inputs!')));
    }
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Reset Password</title>
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
</head>
<body>
<div class="wthree-dot">
	<h1 style="color:black">Reset Password</h1>
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
					</div>
				</div>
				<div class="content-main">
					<div class="w3ls-subscribe">
						<form action="forgotPassword.php" method="post" onsubmit='return formValidation()'><br><p id="head"></p><br> 
							<input type="text" name="email" placeholder="Enter Email Address" id="firstname" name="fname" required="">
							 <p id="firstname"></p> 
							
						
							<input type="submit" id="submit" value="Request Password" name="forgotPass"><br><br>
							
							<p id="response"></p>
							<a href="#" style="color:white">Resend Email</a>
							<br><br><br><br><br><br><br><br><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
							
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

				
										
</script>

<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var email = $("#email");

        $(document).ready(function () {
            $('#submit').on('click', function () {
                if (email.val() != "") {
                    email.css('border', '1px solid green');

                    $.ajax({
                       url: 'forgotPassword.php',
                       method: 'POST',
                       dataType: 'json',
                       data: {
                           email: email.val()
                       }, success: function (response) {
						   
                            if (!response.success)
                               $("#response").html(response.msg).css('color', "red");
                            else
                                $("#response").html(response.msg).css('color', "green");
                        }
                    });
                } else
                    email.css('border', '1px solid red');
            });
        });
    </script>
									
</body>
</html>