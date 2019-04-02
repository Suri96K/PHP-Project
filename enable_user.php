<?php 
	include("connection.php"); 
	$UserID = $_GET['UserID'];
  
$query = "UPDATE user
		  SET Status='Active'
		  WHERE UserID = $UserID";
		  
		  
$result =  mysqli_query($con, $query);

if (!($result))
  {
  		echo("Error : " . mysqli_error($con));
  }  
else
  {
		echo("\nAccount Activation was Successful");
		echo "<script>alert('Account Activation was Successful'); window.location.href = 'admin_home.php'; </script>";
		
  }

?> 
<?php 
	mysqli_close($con);
?>