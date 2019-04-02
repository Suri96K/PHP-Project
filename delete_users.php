<?php

//including the database connection file
include("connection.php");

//getting songid of the data from url
$UserID = $_GET['UserID'];

//deleting the row from song table
$result = mysqli_query($con, "DELETE FROM user 
							  WHERE UserID=$UserID");
							  
if (!($result))
  {
  		echo("Error : " . mysqli_error($con));
  }  
else
  {
		echo("\nAccount Deletion was Successful");
		echo "<script>alert('Account Deletion was Successful'); window.location.href = 'admin_home.php'; </script>";
		
  }
	
							  


?>

<?php 
	mysqli_close($con);
?>							  

