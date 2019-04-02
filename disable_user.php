<?php 
	include("connection.php"); 
	
	/*if($_GET['Status'] ==="Deactivated")
	{
		echo("\nAccount already deactivated");
	}
	
	else
	{*/
		
		
	$UserID = $_GET['UserID'];
  
$query = "UPDATE user
		  SET Status='Deactivated'
		  WHERE UserID = $UserID";
		  
		  
$result =  mysqli_query($con, $query);

if (!($result))
  {
  		echo("Error : " . mysqli_error($con));
  }  
else
  {
		echo("\nAccount Deactivation was Successful");
		echo "<script>alert('Account Deactivation was Successful'); window.location.href = 'admin_home.php'; </script>";
		
  }
	}
?> 
<?php 
	mysqli_close($con);
?>