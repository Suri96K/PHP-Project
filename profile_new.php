<?php 
	include('pro_function.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title> beatPods UserProfile</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
	<link rel="stylesheet" type="text/css" href="style3.css">
	
</head>
<body style="background-image:url(images1/image4.jpg)">
	<br/><br/><br/>
	<form action="profile_new.php" method="post">
	<div id="profile-box">
		<div class="left-box">
		<h3>Profile </h3>
		<img src="images/user.png" style="width:200px; height:200px; align:middle; margin-top:25px; margin-left:50px"/>
		<br/><br/>
		<table width="350" border="0" align="left" cellpadding="25px">
		  <tr>
			<td valign="top"><div align="left">Username:-</div></td>
			<td valign="top"><?php echo $user1 ?></td>
		  </tr><br/>

			<td valign="top"><div align="left">Email:- </div></td>
			<td valign="top"><?php echo $email ?></td>
		  </tr>
		</table>
		</div>
		
		
		<div class="right-box"><br/><br/><br/>
		<h5>Edit personal details </h5><br/>
		<input type="text" name="user" placeholder="Username" id="first" required />
		
		<input type="text" name="email" placeholder="Email" id="tel" required /><br/>
		<input type="submit" name="edit" value="Save" id="edit" />
		
		</div>
	
	</div>
	</form>

</body>
</html>